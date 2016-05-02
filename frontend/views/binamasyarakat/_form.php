<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Binamasyarakat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="binamasyarakat-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php //= $form->field($model, 'id_desa')->textInput() ?>
<table>
    <tr>
    
        <td><?= $form->field($model, 'jenis_kegiatan')->textInput(['maxlength' => 30]) ?></td>
        <td colspan=2><?= $form->field($model, 'lokasi')->textInput(['maxlength' => 30]) ?></td>
            </tr>
    <?php /*= $form->field($model, 'jenis_kegiatan')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) */ ?>
    <tr>
        <td><?= $form->field($model, 'volume')->textInput() ?> </td>
        <td><?= $form->field($model, 'satuan')->textInput() ?></td>
        <td><?= $form->field($model, 'biaya')->textInput() ?></td>
    </tr>
    <tr>
    <td><?php //= $form->field($model, 'start_date')->textInput() ?>
     <?= $form->field($model, 'start_date')->widget(DatePicker::className(), [
    'name' => 'dp_3',
    'type' => DatePicker::TYPE_COMPONENT_APPEND,
    'value' => '1995-9-20',
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd'
    ]
]);
            ?>
        </td>
    <?php //= $form->field($model, 'due_date')->textInput() ?>
    <td>
    <?= $form->field($model, 'due_date')->widget(DatePicker::className(), [
    'name' => 'dp_3',
    'type' => DatePicker::TYPE_COMPONENT_APPEND,
    'value' => '1995-9-20',
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd'
    ]
]);
?>
    </td>

    </tr>
    <div class="form-group">
        <tr><td><?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?></tr></td>
    </div>
</table>
    <?php ActiveForm::end(); ?>

</div>

