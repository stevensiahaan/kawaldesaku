<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dayamasyarakat */

//$this->title = 'Update Dayamasyarakat: ' . ' ' . $model->id_daya_masyarakat;
$this->title = 'Ubah Rencana';
$this->params['breadcrumbs'][] = ['label' => 'Dayamasyarakats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_daya_masyarakat, 'url' => ['view', 'id' => $model->id_daya_masyarakat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dayamasyarakat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
