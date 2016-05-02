<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SubpembdesaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subpembdesas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subpembdesa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Subpembdesa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_subpembdesa',
            'subbidang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
