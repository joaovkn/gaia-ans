<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idservice')->textInput() ?>

    <?= $form->field($model, 'pubalvo')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) ?>

    <?= $form->field($model, 'finalidade')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
