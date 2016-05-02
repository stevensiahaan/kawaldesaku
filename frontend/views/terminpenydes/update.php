<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Terminpenydes */

$this->title = 'Update Terminpenydes: ' . ' ' . $model->id_terminpenydes;
$this->params['breadcrumbs'][] = ['label' => 'Terminpenydes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_terminpenydes, 'url' => ['view', 'id' => $model->id_terminpenydes]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="terminpenydes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
