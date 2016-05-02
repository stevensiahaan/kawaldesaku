<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Binamasyarakat */

//$this->title = 'Update Binamasyarakat: ' . ' ' . $model->id_bina_masyarakat;
$this->title = 'Ubah Rencana';
$this->params['breadcrumbs'][] = ['label' => 'Binamasyarakats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_bina_masyarakat, 'url' => ['view', 'id' => $model->id_bina_masyarakat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="binamasyarakat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
