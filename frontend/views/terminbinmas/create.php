<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Terminbinmas */

$this->title = 'Tambahkan Termin';
$this->params['breadcrumbs'][] = ['label' => 'Terminbinmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="terminbinmas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
