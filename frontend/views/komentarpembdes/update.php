<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Komentarpembdes */

$this->title = 'Update Komentarpembdes: ' . ' ' . $model->id_komentar;
$this->params['breadcrumbs'][] = ['label' => 'Komentarpembdes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_komentar, 'url' => ['view', 'id' => $model->id_komentar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="komentarpembdes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
