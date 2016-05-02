<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Profilaparat */

$this->title = 'Update Profilaparat: ' . ' ' . $model->id_profil;
$this->params['breadcrumbs'][] = ['label' => 'Profilaparats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_profil, 'url' => ['view', 'id' => $model->id_profil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profilaparat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
