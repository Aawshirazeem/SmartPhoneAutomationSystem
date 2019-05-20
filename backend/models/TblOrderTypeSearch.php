<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblOrderType;

/**
 * TblOrderTypeSearch represents the model behind the search form about `backend\models\TblOrderType`.
 */
class TblOrderTypeSearch extends TblOrderType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_type_id'], 'integer'],
            [['order_type_name'], 'safe'],
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
        $query = TblOrderType::find();

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
            'order_type_id' => $this->order_type_id,
        ]);

        $query->andFilterWhere(['like', 'order_type_name', $this->order_type_name]);

        return $dataProvider;
    }
}
