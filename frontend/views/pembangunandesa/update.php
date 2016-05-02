<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pembangunandesa */

//$this->title = 'Update Pembangunandesa: ' . $model->id_pemb_desa;
$this->title = 'Ubah Rencana';
$this->params['breadcrumbs'][] = ['label' => 'Pembangunandesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pemb_desa, 'url' => ['view', 'id' => $model->id_pemb_desa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembangunandesa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
