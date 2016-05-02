<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BinamasyarakatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Binamasyarakats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="binamasyarakat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Binamasyarakat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_bina_masyarakat',
            'id_desa',
            'jenis_kegiatan',
            'lokasi',
            'volume',
            // 'satuan',
            // 'biaya',
            // 'start_date',
            // 'due_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
