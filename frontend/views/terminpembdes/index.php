<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TerminpembdesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Terminpembdes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="terminpembdes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Terminpembdes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_terminpembdes',
            'id_pembdes',
            'keterangan',
            'foto_1',
            'foto_2',
            // 'foto_3',
            // 'foto_4',
            // 'foto_5',
            // 'deskripsi:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
