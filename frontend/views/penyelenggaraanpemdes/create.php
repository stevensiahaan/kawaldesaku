<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Penyelenggaraanpemdes */

$this->title = 'Tambah Rencana Penyelenggaraan Pemerintah Desa';
$this->params['breadcrumbs'][] = ['label' => 'Penyelenggaraanpemdes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyelenggaraanpemdes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
