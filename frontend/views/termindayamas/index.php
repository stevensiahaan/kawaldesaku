<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TermindayamasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Termindayamas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="termindayamas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Termindayamas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_termindayamas',
            'id_daymas',
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
