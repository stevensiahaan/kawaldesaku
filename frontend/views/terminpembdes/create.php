<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Terminpembdes */

$this->title = 'Tambah Termin';
$this->params['breadcrumbs'][] = ['label' => 'Terminpembdes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="terminpembdes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
