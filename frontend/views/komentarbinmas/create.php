<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Komentarbinmas */

$this->title = 'Create Komentarbinmas';
$this->params['breadcrumbs'][] = ['label' => 'Komentarbinmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="komentarbinmas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
