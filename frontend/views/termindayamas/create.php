<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Termindayamas */

$this->title = 'Tambahkan Termin';
$this->params['breadcrumbs'][] = ['label' => 'Termindayamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="termindayamas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
