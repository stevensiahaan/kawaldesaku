<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Komentarpembdes */

$this->title = 'Create Komentarpembdes';
$this->params['breadcrumbs'][] = ['label' => 'Komentarpembdes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="komentarpembdes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
