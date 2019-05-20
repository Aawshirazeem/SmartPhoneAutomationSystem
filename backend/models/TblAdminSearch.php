<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblAdmin;

/**
 * TblAdminSearch represents the model behind the search form about `backend\models\TblAdmin`.
 */
class TblAdminSearch extends TblAdmin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id'], 'integer'],
            [['admin_f_name', 'admin_l_name', 'admin_phone', 'admin_email', 'admin_addr'], 'safe'],
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
        $query = TblAdmin::find();

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
            'admin_id' => $this->admin_id,
        ]);

        $query->andFilterWhere(['like', 'admin_f_name', $this->admin_f_name])
            ->andFilterWhere(['like', 'admin_l_name', $this->admin_l_name])
            ->andFilterWhere(['like', 'admin_phone', $this->admin_phone])
            ->andFilterWhere(['like', 'admin_email', $this->admin_email])
            ->andFilterWhere(['like', 'admin_addr', $this->admin_addr]);

        return $dataProvider;
    }
}
