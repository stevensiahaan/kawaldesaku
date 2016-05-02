<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\models\Termindayamas */

$this->title = "Termin Rencana";
//$this->params['breadcrumbs'][] = ['label' => 'Termindayamas', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="termindayamas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Kembali Ke Rencana', ['/dayamasyarakat/view', 'id' => $model->id_daymas], ['class' => 'btn btn-primary']) ?>
        <?= //Html::a('Tambah Bina Masyarakat', ['update', 'id' => $model->id_desa], ['class' => 'btn btn-primary'])
                 Html::button('Ubah Termin', ['value' => yii\helpers\Url::to(['/termindayamas/update','id' => $model->id_termindayamas]), 
                    'class' => 'btn btn-primary', 'id' => 'updatetermindayamasButton']);

                                Modal::begin([
                                    'id' => 'modal',
                                    'size' => 'modal-lg',
                                ]);
                                echo "<div id='modalContent'></div>";
                                Modal::end();

            ?>
        <?php //= Html::a('Update', ['update', 'id' => $model->id_termindayamas], ['class' => 'btn btn-primary']) ?>
        <?php /*= Html::a('Delete', ['delete', 'id' => $model->id_termindayamas], [
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
         //   'id_termindayamas',
         'idDaymas.jenis_kegiatan',
            'keterangan',
            [
                'attribute'=>'foto 1',
                'value'=>Yii::getAlias('Upload/').'terminDayaDesa/'.$model->foto_1,
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
            [
                'attribute'=>'foto 2',
                'value'=>Yii::getAlias('Upload/').'terminDayaDesa/'.$model->foto_2,
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
            [
                'attribute'=>'foto 3',
                'value'=>Yii::getAlias('Upload/').'terminDayaDesa/'.$model->foto_3,
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
            [
                'attribute'=>'foto 4',
                'value'=>Yii::getAlias('Upload/').'terminDayaDesa/'.$model->foto_4,
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
            [
                'attribute'=>'foto 5',
                'value'=>Yii::getAlias('Upload/').'terminDayaDesa/'.$model->foto_5,
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
            //'foto_2',
            'deskripsi:ntext',
        ],
        
    ]) ?>

<?php 
    if($model->file_1 != ""){
        echo Html::a('Download File 1', ['downloadfile1', 'id' => $model->id_termindayamas], ['class' => 'btn btn-primary']);
        echo "&nbsp";
    }
    if($model->file_2 != ""){
        echo Html::a('Download File 2', ['downloadfile2', 'id' => $model->id_termindayamas], ['class' => 'btn btn-primary']);
        echo "&nbsp";
    }
    if($model->file_3 != ""){
        echo Html::a('Download File 3', ['downloadfile3', 'id' => $model->id_termindayamas], ['class' => 'btn btn-primary']);
        echo "&nbsp";
    }
    if($model->file_4 != ""){
        echo Html::a('Download File 4', ['downloadfile4', 'id' => $model->id_termindayamas], ['class' => 'btn btn-primary']);
        echo "&nbsp";
    }
    if($model->file_5 != ""){
        echo Html::a('Download File 5', ['downloadfile5', 'id' => $model->id_termindayamas], ['class' => 'btn btn-primary']);
        echo "&nbsp";
    }
         
    ?>
</div>
