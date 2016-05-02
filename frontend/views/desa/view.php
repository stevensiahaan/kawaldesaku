<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\tabs\TabsX;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use app\models\Binamasyarakat;
use app\models\Dayamasyarakat;
use frontend\models\Pembangunandesa;
use app\models\Penyelenggaraanpemdes;
use dosamigos\chartjs\ChartJs;
/* @var $this yii\web\View */
/* @var $model frontend\models\Desa */

$this->title = $model->nama_desa;
//$this->params['breadcrumbs'][] = ['label' => 'Desa', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desa-view">


    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php //= Html::a('Update', ['update', 'id' => $model->id_desa], ['class' => 'btn btn-primary']) ?>
        <?php /*= Html::a('Delete', ['delete', 'id' => $model->id_desa], [
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
           // 'id_desa',
            //'id_kecamatan',
            //'idKecamatan.nama_kecamatan',
            //'id_provinsi',
            //'nama_desa',
            //'deskripsi_desa:ntext',
        ],
    ]);

?>
<table>
    <tr><td>
<p>Chart Rencana Desa</p></td>
<td>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chart Total Biaya Rencana Desa</p></td>
</tr>
<tr>
    <td>
<?php 
$binmas = Binamasyarakat::find()
    ->where(['id_desa' => $model->id_desa])
    ->count();

$daymas = Dayamasyarakat::find()
    ->where(['id_desa' => $model->id_desa])
    ->count();


$pemdes = Pembangunandesa::find()
    ->where(['id_desa' => $model->id_desa])
    ->count();

$penydes = Penyelenggaraanpemdes::find()
    ->where(['id_desa' => $model->id_desa])
    ->count();

$query1 = (new \yii\db\Query())->from('binamasyarakat');
$biayabinmas = $query1->sum('biaya');
$query2 = (new \yii\db\Query())->from('dayamasyarakat');
$biayadaymas = $query2->sum('biaya');
$query3 = (new \yii\db\Query())->from('penyelenggaraanpemdes');
$biayapenymas = $query3->sum('biaya');
$query4 = (new \yii\db\Query())->from('pembangunandesa');
$biayapembdes = $query4->sum('biaya');

?>
<?= ChartJs::widget([
    'type' => 'Bar',
    'options' => [
        'height' => 400,
        'width' => 400
    ],
    'data' => [
        'labels' => ["Bina Masyarakat", "Daya Masyarakat", "Penyelenggaraan Pemerintah Desa","Pembangunandesa"],
        'datasets' => [
            [
                'fillColor' => "rgba(151,187,205,0.5)",
                'strokeColor' => "rgba(151,187,205,1)",
                'pointColor' => "rgba(151,187,205,1)",
                'pointStrokeColor' => "#000",
                'data' => [$binmas, $daymas, $penydes, $pemdes]
            ],
        ]
    ]
]);

?>
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?= ChartJs::widget([
    'type' => 'Bar',
    'options' => [
        'height' => 400,
        'width' => 400
    ],
    'data' => [
        'labels' => ["Bina Masyarakat", "Daya Masyarakat", "Penyelenggaraan Pemerintah Desa","Pembangunandesa"],
        'datasets' => [
            [
                'fillColor' => "rgba(151,187,205,0.5)",
                'strokeColor' => "rgba(151,187,205,1)",
                'pointColor' => "rgba(151,187,205,1)",
                'pointStrokeColor' => "#000",
                'data' => [$biayabinmas, $biayadaymas, $biayapenymas, $biayapembdes]
            ],
        ]
    ]
]);
?>
</td>
</tr>
</table>
<br/>
<table>
    <tr>

        <td>
            <?= 
                 Html::button('Tambah Penyelenggaraan Pemerintahan Desa', ['value' => yii\helpers\Url::to(['/penyelenggaraanpemdes/create','id' => $model->id_desa]), 
                    'class' => 'btn btn-success', 'id' => 'modalesButton']);

                                Modal::begin([
                                    'id' => 'modal',
                                    'size' => 'modal-lg',
                                ]);
                                echo "<div id='modalContent'></div>";
                                Modal::end();
            ?>
            &nbsp;&nbsp;
        </td>
        <td>
            <?= 
                 Html::button('Tambah Pembangunan Desa', ['value' => yii\helpers\Url::to(['/pembangunandesa/create','id' => $model->id_desa]), 
                    'class' => 'btn btn-success', 'id' => 'modalesesButton']);

                                Modal::begin([
                                    'id' => 'modal',
                                    'size' => 'modal-lg',
                                ]);
                                echo "<div id='modalContent'></div>";
                                Modal::end();


            ?>
            &nbsp;&nbsp;
        </td>
        <td>
            <?= //Html::a('Tambah Bina Masyarakat', ['update', 'id' => $model->id_desa], ['class' => 'btn btn-primary'])
                 Html::button('Tambah Pembinaan Kemasyarakatan', ['value' => yii\helpers\Url::to(['/binamasyarakat/create','id' => $model->id_desa]), 
                    'class' => 'btn btn-success', 'id' => 'modalButton']);

                                Modal::begin([
                                    'id' => 'modal',
                                    'size' => 'modal-lg',
                                ]);
                                echo "<div id='modalContent'></div>";
                                Modal::end();


            ?>

            &nbsp;&nbsp;
        </td>
        <td>
            <?= 
                 Html::button('Tambah Pemberdayaan Masyarakat', ['value' => yii\helpers\Url::to(['/dayamasyarakat/create','id' => $model->id_desa]), 
                    'class' => 'btn btn-success', 'id' => 'modaleButton']);

                                Modal::begin([
                                    'id' => 'modal',
                                    'size' => 'modal-lg',
                                ]);
                                echo "<div id='modalContent'></div>";
                                Modal::end();


            ?>
            &nbsp;&nbsp;
        </td>
            
        
        
    </tr>
</table>

<br/>
<br/>

<?php   echo TabsX::widget([
        'position' => TabsX::POS_ABOVE,
        'align' => TabsX::ALIGN_LEFT,
        'items' => [
                [
                'label' => 'Penyelenggaraan Pemerintah Desa',
                'content' => GridView::widget([
                    'dataProvider' => $dataProvider3,
                    'columns' => 
                    [
                        //'id_bina_masyarakat',
                        //'id_desa',
                        'jenis_kegiatan',
                        'lokasi',
                        'volume',
                        'satuan',
                        'biaya',
                        'start_date',
                        'due_date',
                        [
                    'label'=>'Aksi',
                    'format'=>'raw',
                    'value' => function($data){
                        return Html::a('Lihat', ['/penyelenggaraanpemdes/view', 'id' => $data->id_peny_pemdesa]);    
                }
          
                ],
                    ],
                    ]),
                ],

           [
                'label' => 'Pembangunan Desa',
                'content' => GridView::widget([
                    'dataProvider' => $dataProvider4,
                    'columns' => 
                    [
                        //'id_bina_masyarakat',
                        //'id_desa',
                        [
                            'attribute' => 'Sub bidang',
                            'value' => 'jenisPembangunanDesa.subbidang',
                        ],
                        
                        'jenis_kegiatan',
                        'lokasi',
                        'volume',
                        'satuan',
                        'biaya',
                        'start_date',
                        'due_date',
                        [
                    'label'=>'Aksi',
                    'format'=>'raw',
                    'value' => function($data){
                        return Html::a('Lihat', ['/pembangunandesa/view', 'id' => $data->id_pemb_desa]);    
                }
          
                ],
                    ],
                    ]),
                ],     
                [
                'label' => 'Pembinaan Kemasyarakatan',
                'content' => GridView::widget([
                    'dataProvider' => $dataProvider1,
                    'columns' => 
                    [
                    //'id_bina_masyarakat',
                    //'id_desa',
                    'jenis_kegiatan',
                    'lokasi',
                    'volume',
                    'satuan',
                    'biaya',
                    'start_date',
                    'due_date',
                    [
                    'label'=>'Aksi',
                    'format'=>'raw',
                    'value' => function($data){
                        return Html::a('Lihat', ['/binamasyarakat/view', 'id' => $data->id_bina_masyarakat]);    
                }
          
                ],
            ],
                    ]),
            ],
           
                [
                'label' => 'Pemberdayaan Masyarakat',
                'content' => GridView::widget([
                    'dataProvider' => $dataProvider2,
                    'columns' => 
                    [
                        //'id_bina_masyarakat',
                        //'id_desa',
                        'jenis_kegiatan',
                        'lokasi',
                        'volume',
                        'satuan',
                        'biaya',
                        'start_date',
                        'due_date',
                        [
                    'label'=>'Aksi',
                    'format'=>'raw',
                    'value' => function($data){
                        return Html::a('Lihat', ['/dayamasyarakat/view', 'id' => $data->id_daya_masyarakat]);    
                }
          
                ],
                    ],
                    ]),
                ],

                
                     ]]);



 
    ?>


</div>
