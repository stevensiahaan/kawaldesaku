<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TerminpembdesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="terminpembdes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_terminpembdes') ?>

    <?= $form->field($model, 'id_pembdes') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'foto_1') ?>

    <?= $form->field($model, 'foto_2') ?>

    <?php // echo $form->field($model, 'foto_3') ?>

    <?php // echo $form->field($model, 'foto_4') ?>

    <?php // echo $form->field($model, 'foto_5') ?>

    <?php // echo $form->field($model, 'deskripsi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
