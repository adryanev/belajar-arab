<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 18/01/18
 * Time: 21:56
 */
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-transparent navbar-fixed-top navbar-color-on-scroll',
        'role'=> 'navigation'
    ],
]);
echo "<div class=\"container-fluid\">";
echo "<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">";
echo
Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => [
        ['label' => 'Beranda', 'url' => ['/site/index']],
        ['label' => 'Materi', 'url' => ['/site/about']],
        ['label' => 'Video', 'url' => ['/site/contact']],

    ],
]);
echo "</div>";
echo "</div>";
NavBar::end();



