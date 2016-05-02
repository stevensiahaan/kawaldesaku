<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DesaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Desas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Desa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_desa',
          //  'id_kecamatan',
             [
            'attribute' => 'id_kecamatan',
            'value' => 'idKecamatan.nama_kecamatan'
        ],
//            'id_kabupaten',
//            'id_provinsi',
            'nama_desa',
            // 'deskripsi_desa:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 




    ?>

</div>
