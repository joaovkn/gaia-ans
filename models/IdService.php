<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "idservice".
 *
 * @property string $service_id
 * @property string $service_title
 * @property string $abrangency
 * @property string $business_area
 * @property string $atended_client
 * @property string $version
 * @property string $data
 * @property string $repository
 * @property int $active
 * @property string $pubalvo
 * @property string $finalidade
 * @property string $description
 * @property string $objective
 * @property string $responsability
 * @property string $disponibility_hour
 * @property string $support_time
 * @property string $support_level
 * @property string $obrigation
 * @property string $prereq
 * @property string $restrition
 * @property string $critical_analisis
 * @property string $analise_desempenho
 * @property string $action_plan
 * @property string $pms
 * @property string $cobranca
 * @property string $reajustes
 * @property string $price
 * @property string $descount
 * @property string $penality
 * @property string $finish_time
 * @property string $comunication
 * @property string $term
 * @property string $juridico
 * @property string $apoio
 * @property string $treinamento
 * @property string $incidente
 * @property string $problema
 * @property string $mudanca
 * @property string $seguranca
 * @property string $confidencialidade
 * @property string $disponibilidade
 * @property string $performance
 * @property string $capacidade
 * @property string $continuidade
 */
class IdService extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'idservice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_title', 'abrangency', 'business_area', 'atended_client', 'version', 'data', 'repository', 'pubalvo', 'finalidade', 'description', 'objective', 'responsability', 'support_level', 'obrigation', 'prereq', 'restrition', 'critical_analisis', 'analise_desempenho', 'action_plan', 'pms', 'reajustes', 'descount', 'penality', 'finish_time', 'comunication', 'term', 'juridico', 'apoio', 'treinamento', 'incidente', 'problema', 'mudanca', 'seguranca', 'confidencialidade', 'disponibilidade', 'continuidade'], 'required'],
            [['service_title', 'abrangency', 'business_area', 'atended_client', 'version', 'repository', 'pubalvo', 'finalidade', 'description', 'objective', 'responsability', 'disponibility_hour', 'support_time', 'support_level', 'obrigation', 'prereq', 'restrition', 'critical_analisis', 'analise_desempenho', 'action_plan', 'pms', 'cobranca', 'reajustes', 'price', 'descount', 'penality', 'finish_time', 'comunication', 'term', 'juridico', 'apoio', 'treinamento', 'incidente', 'problema', 'mudanca', 'seguranca', 'confidencialidade', 'disponibilidade', 'performance', 'capacidade', 'continuidade'], 'string'],
            [['data'], 'safe'],
            [['active'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'service_id' => 'Service ID',
            'service_title' => 'Serviço',
            'abrangency' => 'Abrangência',
            'business_area' => 'Área do Negócio',
            'atended_client' => 'Clientes Atendidos',
            'version' => 'Versão do Documento',
            'data' => 'Data',
            'repository' => 'Repositório',
            'active' => 'Historico',
            'pubalvo' => 'Público Alvo',
            'finalidade' => 'Finalidade',
            'description' => 'Descrição do Produto ou Serviço',
            'objective' => 'Objetivos',
            'responsability' => 'Papéis e Responsabilidades',
            'disponibility_hour' => 'Horário do Serviço',
            'support_time' => 'Horário de Suporte, Especiais e Críticos',
            'support_level' => 'Níveis de Suporte e Escalação',
            'obrigation' => 'Obrigações',
            'prereq' => 'Pré-requisitos',
            'restrition' => 'Restrições',
            'critical_analisis' => 'Análise Crítica',
            'analise_desempenho' => 'Análise de Desempenho do Serviço (Relatórios)',
            'action_plan' => 'Plano de Ação',
            'pms' => 'Plano de Melhoria de Serviço (PMS)',
            'cobranca' => 'Termos de Pagamento (Cobrança)',
            'reajustes' => 'Reajustes',
            'price' => 'Preço',
            'descount' => 'Descontos',
            'penality' => 'Penalidades',
            'finish_time' => 'Término/Rescisão',
            'comunication' => 'Comunicação',
            'term' => 'Prazo',
            'juridico' => 'Contrato Juridico',
            'apoio' => 'Contratos de Apoio',
            'treinamento' => 'Treinamento',
            'incidente' => 'Incidentes',
            'problema' => 'Problemas',
            'mudanca' => 'Mudanças',
            'seguranca' => 'Seguranca',
            'confidencialidade' => 'Confidencialidade e Integridade',
            'disponibilidade' => 'Disponibilidade e Confiabilidade',
            'performance' => 'Desempenho',
            'capacidade' => 'Capacidade',
            'continuidade' => 'Continuidade',
        ];
    }
}
