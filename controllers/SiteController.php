<?php

namespace app\controllers;

use Yii;
use yii\data\ArrayDataProvider;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\httpclient\Client;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public static $url = "http://localhost/learn-arabic/api/v1";
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionVideo()
    {
        $client = new Client();
        $data = null;
        $response = $client->createRequest()->setMethod('get')->setUrl(self::$url.'/video')->send();
        if($response->isOk){
            $data = $response->getData();
        }
        $dataProvider = new ArrayDataProvider([
            'allModels' => $data
        ]);
        return $this->render('video', [
            'dataProvider' => $data,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionMateri()
    {

        $client = new Client();
        $dataMateri=null;
        $dataKategori = null;

        $responseMateri = $client->createRequest()->setMethod('get')->setUrl(self::$url.'/materi')->send();
        if($responseMateri->isOk){
            $dataMateri = $responseMateri->data;
        }
        $responseKategori = $client->createRequest()->setMethod('get')->setUrl(self::$url.'/kategori')->send();
        if($responseKategori->isOk){
            $dataKategori = $responseKategori->data;
        }

        return $this->render('materi',[
            'materiProvider'=>$dataMateri,
            'kategoriProvider'=>$dataKategori,

        ]);
    }
}
