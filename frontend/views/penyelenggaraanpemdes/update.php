<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penyelenggaraanpemdes */

//$this->title = 'Update Penyelenggaraanpemdes: ' . ' ' . $model->id_peny_pemdesa;
$this->title = 'Ubah Rencana';
$this->params['breadcrumbs'][] = ['label' => 'Penyelenggaraanpemdes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_peny_pemdesa, 'url' => ['view', 'id' => $model->id_peny_pemdesa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penyelenggaraanpemdes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
