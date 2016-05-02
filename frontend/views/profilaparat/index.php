<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProfilaparatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profilaparats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profilaparat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Profilaparat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_profil',
            'id_desa',
            'nama',
            'tgl_lahir',
            'jabatan',
            // 'alamat',
            // 'status',
            // 'foto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
