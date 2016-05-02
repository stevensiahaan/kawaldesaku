<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KomentardaymasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Komentardaymas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="komentardaymas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Komentardaymas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_komentar',
            'id_termindayamas',
            'nama_tamu',
            'tanggal',
            'komentar:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
