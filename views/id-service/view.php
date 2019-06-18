<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\IdService */

$this->title = $model->service_id;
$this->params['breadcrumbs'][] = ['label' => 'Id Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="id-service-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->service_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->service_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

        <?= Html::a('Gerar PDF', ['gen-pdf', 'id' => $model->service_id], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'service_id',
            'service_title:ntext',
            'abrangency:ntext',
            'business_area:ntext',
            'atended_client:ntext',
            'version:ntext',
            'data',
            'repository:ntext',
            'active',
            'pubalvo:ntext',
            'finalidade:ntext',
            'description:ntext',
            'objective:ntext',
            'responsability:ntext',
            'disponibility_hour:ntext',
            'support_time:ntext',
            'support_level:ntext',
            'obrigation:ntext',
            'prereq:ntext',
            'restrition:ntext',
            'critical_analisis:ntext',
            'analise_desempenho:ntext',
            'action_plan:ntext',
            'pms:ntext',
            'cobranca:ntext',
            'reajustes:ntext',
            'price:ntext',
            'descount:ntext',
            'penality:ntext',
            'finish_time:ntext',
            'comunication:ntext',
            'term:ntext',
            'juridico:ntext',
            'apoio:ntext',
            'treinamento:ntext',
            'incidente:ntext',
            'problema:ntext',
            'mudanca:ntext',
            'seguranca:ntext',
            'confidencialidade:ntext',
            'disponibilidade:ntext',
            'performance:ntext',
            'capacidade:ntext',
            'continuidade:ntext',
        ],
    ]) ?>

</div>
