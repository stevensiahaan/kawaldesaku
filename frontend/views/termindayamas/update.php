<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Termindayamas */

$this->title = 'Update Termindayamas: ' . ' ' . $model->id_termindayamas;
$this->params['breadcrumbs'][] = ['label' => 'Termindayamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_termindayamas, 'url' => ['view', 'id' => $model->id_termindayamas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="termindayamas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
