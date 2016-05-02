<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DayamasyarakatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dayamasyarakats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dayamasyarakat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dayamasyarakat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_daya_masyarakat',
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
