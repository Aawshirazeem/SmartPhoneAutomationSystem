<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblSalesman;

/**
 * TblSalesmanSearch represents the model behind the search form about `backend\models\TblSalesman`.
 */
class TblSalesmanSearch extends TblSalesman
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['saleman_id'], 'integer'],
            [['saleman_f_name', 'saleman_l_name', 'saleman_phone', 'saleman_email', 'saleman_addr'], 'safe'],
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
        $query = TblSalesman::find();

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
            'saleman_id' => $this->saleman_id,
        ]);

        $query->andFilterWhere(['like', 'saleman_f_name', $this->saleman_f_name])
            ->andFilterWhere(['like', 'saleman_l_name', $this->saleman_l_name])
            ->andFilterWhere(['like', 'saleman_phone', $this->saleman_phone])
            ->andFilterWhere(['like', 'saleman_email', $this->saleman_email])
            ->andFilterWhere(['like', 'saleman_addr', $this->saleman_addr]);

        return $dataProvider;
    }
}
