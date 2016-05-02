<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Terminbinmas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="terminbinmas-form">


    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php //= $form->field($model, 'id_binmas')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => 50]) ?>
    
    
    <table>
        <tr>
            <td colspan=3><span>Paling tidak isi dengan dua foto progress pengerjaan</span></td>
        </tr>
        <tr>
            <td><?= $form->field($model, 'foto_1')->fileInput()  ?></td>

            <td><?= $form->field($model, 'foto_2')->fileInput()  ?></td>
            <td><?= $form->field($model, 'foto_3')->fileInput()  ?></td>
        </tr>
        <tr>
            <td><?= $form->field($model, 'foto_4')->fileInput()  ?></td>
            <td><?= $form->field($model, 'foto_5')->fileInput()  ?></td>
        </tr>
        <tr>
            <td colspan=3><span>Boleh diisi dengan file terkait (Kuitansi, proposal, surat, dan lain lain)</span><td>
            <tr>
        <tr>
            <tr>
            <td><?= $form->field($model, 'file_1')->fileInput()  ?></td>

            <td><?= $form->field($model, 'file_2')->fileInput()  ?></td>
            <td><?= $form->field($model, 'file_3')->fileInput()  ?></td>
        </tr>
        <tr>
            <td><?= $form->field($model, 'file_4')->fileInput()  ?></td>
            <td><?= $form->field($model, 'file_5')->fileInput()  ?></td>
        </tr>
        <tr>
            
        </tr>
    </table>
    <?= $form->field($model, 'deskripsi')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <?php //= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
