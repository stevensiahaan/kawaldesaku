<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\models\Binamasyarakat */

$this->title = $model->jenis_kegiatan;
//$this->params['breadcrumbs'][] = ['label' => 'Binamasyarakats', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="binamasyarakat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Kembali Ke Desa', ['/desa/view', 'id' => $model->id_desa], ['class' => 'btn btn-primary']) ?>
        <?= //Html::a('Tambah Bina Masyarakat', ['update', 'id' => $model->id_desa], ['class' => 'btn btn-primary'])
                 Html::button('Ubah', ['value' => yii\helpers\Url::to(['/binamasyarakat/update','id' => $model->id_bina_masyarakat]), 
                    'class' => 'btn btn-primary', 'id' => 'updatebinmasButton']);

                                Modal::begin([
                                    'id' => 'modal',
                                    'size' => 'modal-lg',
                                ]);
                                echo "<div id='modalContent'></div>";
                                Modal::end();

            ?>

        <?php //= Html::a('Update', ['update', 'id' => $model->id_bina_masyarakat], ['class' => 'btn btn-primary']) ?>
        <?php /*= Html::a('Delete', ['delete', 'id' => $model->id_bina_masyarakat], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) */?>
    </p>

    <?php 
         
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_bina_masyarakat',
            //'idDesa.nama_desa',
            'jenis_kegiatan',
            'lokasi',
            'volume',
            'satuan',
            'biaya',
            'start_date',
            'due_date',
        ],
    ]); ?>
<br/>





<H2>Termin <?php echo $model->jenis_kegiatan ?></H2>
<?= //Html::a('Tambah Bina Masyarakat', ['update', 'id' => $model->id_desa], ['class' => 'btn btn-primary'])
                 Html::button('Tambah Termin', ['value' => yii\helpers\Url::to(['/terminbinmas/create','id' => $model->id_bina_masyarakat]), 
                    'class' => 'btn btn-success', 'id' => 'terminbinmasButton']);

                                Modal::begin([
                                    'id' => 'modal',
                                    'size' => 'modal-lg',
                                ]);
                                echo "<div id='modalContent'></div>";
                                Modal::end();

            ?>

            <br/><br/>
<?= GridView::widget([
        'dataProvider' => $dataProvider1,
//        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            //'id_terminbinmas',
            //'id_binmas',
            'keterangan',
            //'foto_1',
            //'foto_2',
            //'foto_3',
            //'foto_4',
            //'foto_5',
            'deskripsi:ntext',
                        [
                    'label'=>'Aksi',
                    'format'=>'raw',
                    'value' => function($data){
                        return Html::a('Lihat', ['/terminbinmas/view', 'id' => $data->id_terminbinmas]);    
                }
          
                ],


            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
