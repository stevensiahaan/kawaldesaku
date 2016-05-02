<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Desa */

$this->title = 'Update Desa: ' . ' ' . $model->id_desa;
$this->params['breadcrumbs'][] = ['label' => 'Desas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_desa, 'url' => ['view', 'id' => $model->id_desa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="desa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
