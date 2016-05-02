<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Subpembdesa */

$this->title = 'Create Subpembdesa';
$this->params['breadcrumbs'][] = ['label' => 'Subpembdesas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subpembdesa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
