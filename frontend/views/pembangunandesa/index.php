<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PembangunandesaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembangunandesas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembangunandesa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pembangunandesa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pemb_desa',
            'id_desa',
            'jenis_pembangunan_desa',
            'jenis_kegiatan',
            'lokasi',
            // 'volume',
            // 'satuan',
            // 'biaya',
            // 'start_date',
            // 'due_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
