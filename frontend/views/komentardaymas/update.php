<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Komentardaymas */

$this->title = 'Update Komentardaymas: ' . ' ' . $model->id_komentar;
$this->params['breadcrumbs'][] = ['label' => 'Komentardaymas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_komentar, 'url' => ['view', 'id' => $model->id_komentar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="komentardaymas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
