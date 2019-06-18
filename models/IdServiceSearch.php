<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\IdService;

/**
 * IdServiceSearch represents the model behind the search form of `app\models\IdService`.
 */
class IdServiceSearch extends IdService
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_id', 'active'], 'integer'],
            [['service_title', 'abrangency', 'business_area', 'atended_client', 'version', 'data', 'repository', 'pubalvo', 'finalidade', 'description', 'objective', 'responsability', 'disponibility_hour', 'support_time', 'support_level', 'obrigation', 'prereq', 'restrition', 'critical_analisis', 'analise_desempenho', 'action_plan', 'pms', 'cobranca', 'reajustes', 'price', 'descount', 'penality', 'finish_time', 'comunication', 'term', 'juridico', 'apoio', 'treinamento', 'incidente', 'problema', 'mudanca', 'seguranca', 'confidencialidade', 'disponibilidade', 'performance', 'capacidade', 'continuidade'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = IdService::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'service_id' => $this->service_id,
            'data' => $this->data,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'service_title', $this->service_title])
            ->andFilterWhere(['like', 'abrangency', $this->abrangency])
            ->andFilterWhere(['like', 'business_area', $this->business_area])
            ->andFilterWhere(['like', 'atended_client', $this->atended_client])
            ->andFilterWhere(['like', 'version', $this->version])
            ->andFilterWhere(['like', 'repository', $this->repository])
            ->andFilterWhere(['like', 'pubalvo', $this->pubalvo])
            ->andFilterWhere(['like', 'finalidade', $this->finalidade])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'objective', $this->objective])
            ->andFilterWhere(['like', 'responsability', $this->responsability])
            ->andFilterWhere(['like', 'disponibility_hour', $this->disponibility_hour])
            ->andFilterWhere(['like', 'support_time', $this->support_time])
            ->andFilterWhere(['like', 'support_level', $this->support_level])
            ->andFilterWhere(['like', 'obrigation', $this->obrigation])
            ->andFilterWhere(['like', 'prereq', $this->prereq])
            ->andFilterWhere(['like', 'restrition', $this->restrition])
            ->andFilterWhere(['like', 'critical_analisis', $this->critical_analisis])
            ->andFilterWhere(['like', 'analise_desempenho', $this->analise_desempenho])
            ->andFilterWhere(['like', 'action_plan', $this->action_plan])
            ->andFilterWhere(['like', 'pms', $this->pms])
            ->andFilterWhere(['like', 'cobranca', $this->cobranca])
            ->andFilterWhere(['like', 'reajustes', $this->reajustes])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'descount', $this->descount])
            ->andFilterWhere(['like', 'penality', $this->penality])
            ->andFilterWhere(['like', 'finish_time', $this->finish_time])
            ->andFilterWhere(['like', 'comunication', $this->comunication])
            ->andFilterWhere(['like', 'term', $this->term])
            ->andFilterWhere(['like', 'juridico', $this->juridico])
            ->andFilterWhere(['like', 'apoio', $this->apoio])
            ->andFilterWhere(['like', 'treinamento', $this->treinamento])
            ->andFilterWhere(['like', 'incidente', $this->incidente])
            ->andFilterWhere(['like', 'problema', $this->problema])
            ->andFilterWhere(['like', 'mudanca', $this->mudanca])
            ->andFilterWhere(['like', 'seguranca', $this->seguranca])
            ->andFilterWhere(['like', 'confidencialidade', $this->confidencialidade])
            ->andFilterWhere(['like', 'disponibilidade', $this->disponibilidade])
            ->andFilterWhere(['like', 'performance', $this->performance])
            ->andFilterWhere(['like', 'capacidade', $this->capacidade])
            ->andFilterWhere(['like', 'continuidade', $this->continuidade]);

        return $dataProvider;
    }
}
