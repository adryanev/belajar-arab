<?php
/* @var $form yii\bootstrap\ActiveForm */
/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = 'Materi';
?>
<div class="main main-raised">
    <div class="section section-basic">
        <div class="container">
            <div class="title">
                <h2><?= $this->title ?></h2>
            </div>

            <?php
            $materiMap = \yii\helpers\ArrayHelper::map($materiProvider['master'],'idMateri','namaMateri');
            $kategoriMap = \yii\helpers\ArrayHelper::map($kategoriProvider['master'],'idKategori','namaKategori');
            ?>
            <?=
            \kartik\select2\Select2::widget([
                'id' => 'idMateri',
                'name' => 'idMateri',
                'data' => $materiMap,
                'options' => [
                    'placeholder' => 'Pilih Materi',
                ],
            ]);
            ?>
            <?=
            \kartik\select2\Select2::widget([
                'id' => 'idKategori',
                'name' => 'idKategori',
                'data' => $kategoriMap,
                'options' => [
                    'placeholder' => 'Pilih kategori',
                ],
            ]);
            ?>
            <?=
            Html::button('Pilih',['class'=>'btn btn-primary','id'=>'btn-pilih'])
            ?>
            <div class="clearfix"></div>

            <div class="content" id="isiMateri">
                <h3 class="center text-danger">Silahkan pilih isi materi.</h3>



            </div>

        </div>


    </div>
<?php

    $this->registerJs("
      var idmat = 0;
      var idkat = 0;
      var idSubMat = [];
    
    $('select#idMateri').change(function(){
            idmat = $(this).val();
        });
    $('select#idKategori').change(function(){
            idkat = $(this).val();
            
     });
    $('#btn-pilih').click(function () {
      
        var sendInfo = {idMateri: idmat,idKategori: idkat};
            $.ajax({
                type: 'POST',
                data: sendInfo,
                url: '/learn-arabic/api/v1/sub-materi/id-sub-materi',
                contentType:'application/x-www-form-urlencoded',
                success: function(response){
                    console.log(response);
                    console.log(JSON.stringify(response));
                    $('#isiMateri').empty('');
                    $('#isiMateri').append('<div class=\"row\">');
                   for(var i = 0; i< response.master.length ; i++){
                  
                   $('#isiMateri').append('<div class=\"col-md-4\"><div class=\"card\"><div class=\"content\"><div class=\"tab-content text-center\"><div class=\"tab-pane active\" id=\"jumlah_barang\"><img src=\"http://localhost/learn-arabic/web/uploads/images/'+response.master[i].gambar+'\" height=\"200px\" width=\"200px\" alt=\"gambar\"> <div class=\"clearfix\"></div><h3 class=\"center\">'+response.master[i].isi+'</h3><audio controls src=\"http://localhost/learn-arabic/web/uploads/suara/'+response.master[i].suara+'\"></audio></div></div></div></div></div>');
                   
                   }
                   $('#isiMateri').append('</div>');
                   
                   
                },



            });
            
    });
    ");