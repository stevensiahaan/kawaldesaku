<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TerminbinmasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Terminbinmas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="terminbinmas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Terminbinmas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_terminbinmas',
            'id_binmas',
            'keterangan',
            'foto_1',
            'foto_2',
            // 'foto_3',
            // 'foto_4',
            // 'foto_5',
            'deskripsi:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
