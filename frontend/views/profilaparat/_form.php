<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profilaparat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profilaparat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_desa')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => 30]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
