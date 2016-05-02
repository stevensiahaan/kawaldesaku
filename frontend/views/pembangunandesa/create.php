<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Pembangunandesa */

$this->title = 'Tambah Rencana Pembangunan Desa';
$this->params['breadcrumbs'][] = ['label' => 'Pembangunandesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembangunandesa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
