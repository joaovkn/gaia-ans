<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IdService */

$this->title = 'Criar Acordo';
$this->params['breadcrumbs'][] = ['label' => 'Id Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="id-service-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
