<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $this yii\web\View */
use frontend\models\Provinsi;
use frontend\models\Kabupaten;
use frontend\models\Kecamatan;
use frontend\models\Desa;
use yii\grid\GridView;

$this->title = 'Kawal Desaku';
?>
<!-- Banner -->
                    <section id="banner">
                        <div class="inner">
                            <h2>Kawal Desaku</h2>
                            <p class="more"><br/><br/>
                            
                            Mari memulai mencintai dan mengetahui desamu</p>
                        </div>
                    </section>

<div class="site-index">

    <div class="jumbotron">
        
          <?php echo $this->render('../desa/_search', ['model' => $searchModel]); ?>

      <!--  <p><?= Html::a('Cari Desamu', ['/provinsi/lihat'], ['class'=>'btn btn-primary']) ?></p> -->
    </div>
    <div class="body-content">
       
 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_desa',
            // 
            [
            'attribute' => 'id_kecamatan',
            'value' => 'idKecamatan.nama_kecamatan'
        ],
            //'id_kecamatan',
//            'id_kabupaten',
//            'id_provinsi',
            'nama_desa',
            // 'deskripsi_desa:ntext',
            [
                    'label'=>'Aksi',
                    'format'=>'raw',
                    'value' => function($data){
                        return Html::a('Lihat', ['/desa/view', 'id' => $data->id_desa]);    
                }
          
                ],
            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>

            
