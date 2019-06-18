<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->service_title;

?>
<div class="id-service-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
