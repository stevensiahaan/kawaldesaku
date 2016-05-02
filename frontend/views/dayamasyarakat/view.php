<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $model app\models\Dayamasyarakat */

$this->title = $model->jenis_kegiatan;
//$this->params['breadcrumbs'][] = ['label' => 'Dayamasyarakats', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dayamasyarakat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Kembali Ke Desa', ['/desa/view', 'id' => $model->id_desa], ['class' => 'btn btn-primary']) ?>
        <?= //Html::a('Tambah Bina Masyarakat', ['update', 'id' => $model->id_desa], ['class' => 'btn btn-primary'])
                 Html::button('Ubah', ['value' => yii\helpers\Url::to(['/dayamasyarakat/update','id' => $model->id_daya_masyarakat]), 
                    'class' => 'btn btn-primary', 'id' => 'updatedayamasButton']);

                                Modal::begin([
                                    'id' => 'modal',
                                    'size' => 'modal-lg',
                                ]);
                                echo "<div id='modalContent'></div>";
                                Modal::end();

            ?>
        <?php /*= Html::a('Update', ['update', 'id' => $model->id_daya_masyarakat], ['class' => 'btn btn-primary']) */?>
        <?php /*= Html::a('Delete', ['delete', 'id' => $model->id_daya_masyarakat], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) */?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_daya_masyarakat',
            //'id_desa',
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
                 Html::button('Tambah Termin', ['value' => yii\helpers\Url::to(['/termindayamas/create','id' => $model->id_daya_masyarakat]), 
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
                        return Html::a('Lihat', ['/termindayamas/view', 'id' => $data->id_termindayamas]);    
                }
          
                ],


            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
