<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PembangunandesaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembangunandesa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pemb_desa') ?>

    <?= $form->field($model, 'id_desa') ?>

    <?= $form->field($model, 'jenis_pembangunan_desa') ?>

    <?= $form->field($model, 'jenis_kegiatan') ?>

    <?= $form->field($model, 'lokasi') ?>

    <?php // echo $form->field($model, 'volume') ?>

    <?php // echo $form->field($model, 'satuan') ?>

    <?php // echo $form->field($model, 'biaya') ?>

    <?php // echo $form->field($model, 'start_date') ?>

    <?php // echo $form->field($model, 'due_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
