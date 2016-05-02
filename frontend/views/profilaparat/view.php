<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Profilaparat */

$this->title = $model->id_profil;
$this->params['breadcrumbs'][] = ['label' => 'Profilaparats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profilaparat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_profil], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_profil], [
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
            'id_profil',
            'id_desa',
            'nama',
            'tgl_lahir',
            'jabatan',
            'alamat',
            'status',
            'foto',
        ],
    ]) ?>

</div>
