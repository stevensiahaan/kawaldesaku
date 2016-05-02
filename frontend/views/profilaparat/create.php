<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Profilaparat */

$this->title = 'Create Profilaparat';
$this->params['breadcrumbs'][] = ['label' => 'Profilaparats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profilaparat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
