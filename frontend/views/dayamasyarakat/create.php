<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dayamasyarakat */

$this->title = 'Tambahkan Rencana Daya Masyarakat';
$this->params['breadcrumbs'][] = ['label' => 'Dayamasyarakats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dayamasyarakat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
