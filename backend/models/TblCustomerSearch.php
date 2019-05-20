<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblCustomer;

/**
 * TblCustomerSearch represents the model behind the search form about `backend\models\TblCustomer`.
 */
class TblCustomerSearch extends TblCustomer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cus_id'], 'integer'],
            [['cus_f_name', 'cus_l_name', 'cus_phone', 'cus_email', 'cus_addr'], 'safe'],
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
        $query = TblCustomer::find();

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
            'cus_id' => $this->cus_id,
        ]);

        $query->andFilterWhere(['like', 'cus_f_name', $this->cus_f_name])
            ->andFilterWhere(['like', 'cus_l_name', $this->cus_l_name])
            ->andFilterWhere(['like', 'cus_phone', $this->cus_phone])
            ->andFilterWhere(['like', 'cus_email', $this->cus_email])
            ->andFilterWhere(['like', 'cus_addr', $this->cus_addr]);

        return $dataProvider;
    }
}
