<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Terminpembdes */

$this->title = 'Update Terminpembdes: ' . ' ' . $model->id_terminpembdes;
$this->params['breadcrumbs'][] = ['label' => 'Terminpembdes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_terminpembdes, 'url' => ['view', 'id' => $model->id_terminpembdes]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="terminpembdes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
