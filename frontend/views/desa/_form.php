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
/* @var $model frontend\models\Desa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="desa-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'id_provinsi')->dropDownList(
            ArrayHelper::map(provinsi::find() -> all(), 'id_provinsi','nama_provinsi'),
            ['prompt'=>'Pilih Provinsi',
                'onChange'=>'$.post ("index.php?r=kabupaten/lists&id='.'"+$(this).val(),function( data )'
         . '{ $("select#desa-id_kabupaten").html( data);});'
            ]); 
    ?> 
    
     <?= $form->field($model, 'id_kabupaten')->dropDownList(
            ArrayHelper::map(Kabupaten::find() -> all(), 'id_kabupaten','nama_kabupaten'),
     ['prompt'=>'Pilih Kabupaten',
                'onChange'=>'$.post ("index.php?r=kecamatan/lists&id='.'"+$(this).val(),function( data )'
         . '{ $("select#desa-id_kecamatan").html( data);});'
            ]);
    ?>

     <?= $form->field($model, 'id_kecamatan')->dropDownList(
            ArrayHelper::map(Kecamatan::find() -> all(), 'id_kecamatan','nama_kecamatan'),
     ['prompt'=>'Pilih Kecamatan',
         'onChange'=>'$.post ("index.php?r=desa/lists&id='.'"+$(this).val(),function( data )'
         . '{ $("select#desa-id_desa").html( data);});'
            ]);
    ?>
    
    
    <?= $form->field($model, 'nama_desa')->textInput(['maxlength' => 20]) ?> 

    <?= $form->field($model, 'deskripsi_desa')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
