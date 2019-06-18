<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceDetail */

$this->title = 'Update Service Detail: ' . $model->idservice;
$this->params['breadcrumbs'][] = ['label' => 'Service Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idservice, 'url' => ['view', 'id' => $model->idservice]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="service-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
