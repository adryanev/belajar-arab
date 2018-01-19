<?php

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Video';
?>
<div class="main main-raised">
    <div class="section section-basic">
        <div class="container">
            <div class="title">
                <h2><?=$this->title ?></h2>
            </div>

            <?php

           for($i = 0; $i<count($dataProvider['master']); $i++){
               $namaVideo = $dataProvider['master'][$i]['namaVideo'];
               $idYoutube = $dataProvider['master'][$i]['idYoutubeVideo'];
               echo "<div class=\"card card-nav-tabs\">
                <div class=\"header header-primary\">
                    <div class=\"nav-tabs-navigation\">
                        <div class=\"nav-tabs-wrapper\">
                            <ul class=\"nav nav-tabs\" data-tabs=\"tabs\">
                                <li class=\"active\">
                                    <h3>$namaVideo</h3>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class=\"content\">
                    <div class=\"tab-content text-center\">
                        <div class=\"tab-pane active\" id=\"jumlah_barang\">
                            <iframe id=\"ytplayer$i\" type=\"text / html\" width=\"640\" height=\"360\"
                        src=\"https://www.youtube.com/embed/$idYoutube\"></iframe>
                        </div>

                    </div>
                </div>
            </div>";


            }

            ?>


        </div>
</div>
