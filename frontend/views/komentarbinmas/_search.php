<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\KomentarbinmasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="komentarbinmas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_komentar') ?>

    <?= $form->field($model, 'id_terminbinmas') ?>

    <?= $form->field($model, 'nama_tamu') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'komentar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
