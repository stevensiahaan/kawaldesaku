<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DepDrop;
use frontend\models\Provinsi;
use frontend\models\Kabupaten;
use frontend\models\Kecamatan;
use frontend\models\KabupatenSearch;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Json;
use frontend\models\Desa;


/* @var $this yii\web\View */
/* @var $model frontend\models\DesaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="desa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    
        <?= $form->field($model, 'id_provinsi')->dropDownList(
            ArrayHelper::map(provinsi::find() -> all(), 'id_provinsi','nama_provinsi'),
            ['prompt'=>'Pilih Provinsi',
                'onChange'=>'$.post ("index.php?r=kabupaten/lists&id='.'"+$(this).val(),function( data )'
         . '{ $("select#desasearch-id_kabupaten").html( data);});'
            ]); 
    ?> 
    
     <?= $form->field($model, 'id_kabupaten')->dropDownList(
            ArrayHelper::map(Kabupaten::find() -> all(), 'id_kabupaten','nama_kabupaten'),
     ['prompt'=>'Pilih Kabupaten',
                'onChange'=>'$.post ("index.php?r=kecamatan/lists&id='.'"+$(this).val(),function( data )'
         . '{ $("select#desasearch-id_kecamatan").html( data);});'
            ]);
    ?>

     <?= $form->field($model, 'id_kecamatan')->dropDownList(
            ArrayHelper::map(Kecamatan::find() -> all(), 'id_kecamatan','nama_kecamatan'),
     ['prompt'=>'Pilih Kecamatan',
         'onChange'=>'$.post ("index.php?r=desa/lists&id='.'"+$(this).val(),function( data )'
         . '{ $("select#desasearch-id_desa").html( data);});'
            ]);
    ?>

    <?= $form->field($model, 'id_desa')->dropDownList(
            ArrayHelper::map(Desa::find() -> all(), 'id_desa','nama_desa'),
     ['prompt'=>'Pilih Desa',
          ]);
            ?>
    
    <?php // echo $form->field($model, 'deskripsi_desa') ?>

    <div class="form-group">
        <?= Html::submitButton('Cari Desamu', ['class' => 'btn btn-primary']) ?>
       <!-- <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?> -->
    </div>

    <?php ActiveForm::end(); ?>

</div>
