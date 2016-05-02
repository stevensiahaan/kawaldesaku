<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Subpembdesa;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model frontend\models\Pembangunandesa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembangunandesa-form">

    <?php $form = ActiveForm::begin(); ?>
    <table>
    <tr>
    <?php //= $form->field($model, 'id_desa')->textInput() ?>

    <td><?= $form->field($model, 'jenis_pembangunan_desa')->dropDownList(
        ArrayHelper::map(Subpembdesa::find()->all(),'id_subpembdesa','subbidang'),
            ['prompt'=>'-Pilih Jenis Kegiatan-']
            ) ?>
    </td>
    
    <td><?= $form->field($model, 'jenis_kegiatan')->textInput() ?></td>

    <?php //= $form->field($model, 'jenis_kegiatan')->textInput(['maxlength' => true]) ?>

     
    <td><?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?></td>
    <tr>
    <td><?= $form->field($model, 'volume')->textInput() ?></td>

    <td><?= $form->field($model, 'satuan')->textInput() ?></td>

    <td><?= $form->field($model, 'biaya')->textInput() ?></td>
    </tr>
    <tr>
    <td>
            <?php //= $form->field($model, 'start_date')->textInput() ?>
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
?></td>
</tr>
    <div class="form-group">
        <tr><td><?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?></td></tr>
    </div>

    <?php ActiveForm::end(); ?>

</div>
