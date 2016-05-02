<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KomentarpembdesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Komentarpembdes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="komentarpembdes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Komentarpembdes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_komentar',
            'id_terminpembdes',
            'nama_tamu',
            'tanggal',
            'komentar:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
