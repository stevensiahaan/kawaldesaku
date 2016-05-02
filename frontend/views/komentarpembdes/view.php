<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Komentarpembdes */

$this->title = $model->id_komentar;
$this->params['breadcrumbs'][] = ['label' => 'Komentarpembdes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="komentarpembdes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_komentar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_komentar], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_komentar',
            'id_terminpembdes',
            'nama_tamu',
            'tanggal',
            'komentar:ntext',
        ],
    ]) ?>

</div>
