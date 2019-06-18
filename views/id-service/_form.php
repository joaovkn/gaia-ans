<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\IdService */
/* @var $form yii\widgets\ActiveForm */

$form = ActiveForm::begin();

$step1_content = $form->field($model, 'service_title')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'abrangency')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'business_area')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'atended_client')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'version')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'data')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'repository')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]);

$step2_content = $form->field($model, 'active')->textarea(['rows' => 6]);

$step3_content = $form->field($model, 'pubalvo')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'finalidade')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]);

$step4_content = $form->field($model, 'description')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'objective')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'responsability')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]);
            
$step5_content = $form->field($model, 'disponibility_hour')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'support_time')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'support_level')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'obrigation')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'prereq')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'restrition')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'critical_analisis')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'analise_desempenho')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'action_plan')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'pms')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'cobranca')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'reajustes')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'price')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'descount')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'penality')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'finish_time')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'comunication')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'term')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]);

$step6_content = $form->field($model, 'juridico')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'apoio')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'treinamento')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'incidente')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'problema')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'mudanca')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'seguranca')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'confidencialidade')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'disponibilidade')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'performance')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'capacidade')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]) .
'<br/>' . $form->field($model, 'continuidade')->widget(CKEditor::className(),[
	'options' => ['rows' => 6],]);

$wizard_config = [
	'id' => 'stepwizard',
	'steps' => [
		1 => [
			'title' => 'Identificação do Serviço',
            'icon' => 'glyphicon glyphicon-search',
            'content' => '<h3>Identificação do Serviço</h3>' . $step1_content,
			'buttons' => [
				'next' => [
					'title' => 'Forward', 
					'options' => [
						'class' => 'disabled'
					],
				 ],
			 ],
		],
		2 => [
			'title' => 'Histórico do Processo',
            'icon' => 'glyphicon glyphicon-book',
            'content' => '<h3>Histórico do Processo</h3>' . $step2_content,
			'buttons' => [
				'next' => [
					'title' => 'Forward', 
					'options' => [
						'class' => 'disabled'
					],
				 ],
			 ],
		],
		3 => [
			'title' => 'Identificação do Produto ou Serviço',
            'icon' => 'glyphicon glyphicon-eye-open',
            'content' => '<h3>Identificação do Produto ou Serviço</h3>' . $step3_content,
			'buttons' => [
				'next' => [
					'title' => 'Forward', 
					'options' => [
						'class' => 'disabled'
					],
				 ],
			 ],
		],4 => [
			'title' => 'Escopo do Produto ou Serviço',
            'icon' => 'glyphicon glyphicon-list-alt',
            'content' => '<h3>Escopo do Produto ou Serviço</h3>' . $step4_content,
			'buttons' => [
				'next' => [
					'title' => 'Forward', 
					'options' => [
						'class' => 'disabled'
					],
				 ],
			 ],
		],5 => [
			'title' => 'Detalhamento do Acordo de Nível de Serviço',
            'icon' => 'glyphicon glyphicon-search',
            'content' => '<h3>Detalhamento do Acordo de Nível de Serviço</h3>' . $step5_content,
			'buttons' => [
				'next' => [
					'title' => 'Forward', 
					'options' => [
						'class' => 'disabled'
					],
				 ],
			 ],
		],6 => [
			'title' => 'Informações Adicionais',
            'icon' => 'glyphicon glyphicon-plus',
            'content' => '<h3>Informações Adicionais</h3>' . $step6_content,
			'buttons' => [
				'next' => [
					'title' => 'Forward', 
					'options' => [
						'class' => 'disabled'
					],
				 ],
			 ],
		],7 => [
			'title' => 'Glossário',
            'icon' => 'glyphicon glyphicon-bookmark',
            'content' => '<h3>Glossário</h3>',
			'buttons' => [
				'next' => [
					'title' => 'Forward', 
					'options' => [
						'class' => 'disabled'
					],
				 ],
			 ],
		],8 => [
			'title' => 'Anexos',
            'icon' => 'glyphicon glyphicon-paperclip',
            'content' => '<h3>Anexos</h3>',
			'buttons' => [
				'next' => [
					'title' => 'Forward', 
					'options' => [
						'class' => 'disabled'
					],
				 ],
			 ],
		],
	],
	'complete_content' => "Completo!", // Optional final screen
	'start_step' => 1, // Optional, start with a specific step
];
?>

<div class="id-service-form">
    <?= \drsdre\wizardwidget\WizardWidget::widget($wizard_config); ?>
    <!-- <?= $form->field($model, 'service_title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'abrangency')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'business_area')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'atended_client')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'version')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'repository')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <?= $form->field($model, 'pubalvo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'finalidade')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'objective')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'responsability')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'disponibility_hour')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'support_time')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'support_level')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'obrigation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'prereq')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'restrition')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'critical_analisis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'analise_desempenho')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'action_plan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pms')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cobranca')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reajustes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'descount')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'penality')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'finish_time')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'comunication')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'term')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'juridico')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'apoio')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'treinamento')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'incidente')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'problema')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mudanca')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'seguranca')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'confidencialidade')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'disponibilidade')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'performance')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'capacidade')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'continuidade')->textarea(['rows' => 6]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
