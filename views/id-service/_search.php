<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IdServiceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="id-service-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'service_id') ?>

    <?= $form->field($model, 'service_title') ?>

    <?= $form->field($model, 'abrangency') ?>

    <?= $form->field($model, 'business_area') ?>

    <?= $form->field($model, 'atended_client') ?>

    <?php // echo $form->field($model, 'version') ?>

    <?php // echo $form->field($model, 'data') ?>

    <?php // echo $form->field($model, 'repository') ?>

    <?php // echo $form->field($model, 'active') ?>

    <?php // echo $form->field($model, 'pubalvo') ?>

    <?php // echo $form->field($model, 'finalidade') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'objective') ?>

    <?php // echo $form->field($model, 'responsability') ?>

    <?php // echo $form->field($model, 'disponibility_hour') ?>

    <?php // echo $form->field($model, 'support_time') ?>

    <?php // echo $form->field($model, 'support_level') ?>

    <?php // echo $form->field($model, 'obrigation') ?>

    <?php // echo $form->field($model, 'prereq') ?>

    <?php // echo $form->field($model, 'restrition') ?>

    <?php // echo $form->field($model, 'critical_analisis') ?>

    <?php // echo $form->field($model, 'analise_desempenho') ?>

    <?php // echo $form->field($model, 'action_plan') ?>

    <?php // echo $form->field($model, 'pms') ?>

    <?php // echo $form->field($model, 'cobranca') ?>

    <?php // echo $form->field($model, 'reajustes') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'descount') ?>

    <?php // echo $form->field($model, 'penality') ?>

    <?php // echo $form->field($model, 'finish_time') ?>

    <?php // echo $form->field($model, 'comunication') ?>

    <?php // echo $form->field($model, 'term') ?>

    <?php // echo $form->field($model, 'juridico') ?>

    <?php // echo $form->field($model, 'apoio') ?>

    <?php // echo $form->field($model, 'treinamento') ?>

    <?php // echo $form->field($model, 'incidente') ?>

    <?php // echo $form->field($model, 'problema') ?>

    <?php // echo $form->field($model, 'mudanca') ?>

    <?php // echo $form->field($model, 'seguranca') ?>

    <?php // echo $form->field($model, 'confidencialidade') ?>

    <?php // echo $form->field($model, 'disponibilidade') ?>

    <?php // echo $form->field($model, 'performance') ?>

    <?php // echo $form->field($model, 'capacidade') ?>

    <?php // echo $form->field($model, 'continuidade') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
