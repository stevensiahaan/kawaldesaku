<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Komentardaymas */

$this->title = 'Create Komentardaymas';
$this->params['breadcrumbs'][] = ['label' => 'Komentardaymas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="komentardaymas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
