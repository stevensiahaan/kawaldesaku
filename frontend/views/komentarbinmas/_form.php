<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Komentarbinmas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="komentarbinmas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_terminbinmas')->textInput() ?>

    <?= $form->field($model, 'nama_tamu')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'komentar')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
