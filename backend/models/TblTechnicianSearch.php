<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblTechnician;

/**
 * TblTechnicianSearch represents the model behind the search form about `backend\models\TblTechnician`.
 */
class TblTechnicianSearch extends TblTechnician
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tech_id'], 'integer'],
            [['tech_name', 'tech_l_name', 'tech_phone', 'tech_email', 'tech_addr'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = TblTechnician::find();

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
            'tech_id' => $this->tech_id,
        ]);

        $query->andFilterWhere(['like', 'tech_name', $this->tech_name])
            ->andFilterWhere(['like', 'tech_l_name', $this->tech_l_name])
            ->andFilterWhere(['like', 'tech_phone', $this->tech_phone])
            ->andFilterWhere(['like', 'tech_email', $this->tech_email])
            ->andFilterWhere(['like', 'tech_addr', $this->tech_addr]);

        return $dataProvider;
    }
}
