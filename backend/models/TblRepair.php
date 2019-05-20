<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_repair".
 *
 * @property integer $repair_id
 * @property string $repair_name
 * @property string $repair_description
 * @property double $purchase_price
 * @property double $sale_price
 * @property integer $model_id
 *
 * @property TblOrder[] $tblOrders
 * @property TblModel $model
 */
class TblRepair extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_repair';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['repair_name', 'repair_description', 'purchase_price', 'sale_price', 'model_id'], 'required'],
            [['purchase_price', 'sale_price'], 'number'],
            [['model_id'], 'integer'],
            [['repair_name'], 'string', 'max' => 200],
            [['repair_description'], 'string', 'max' => 1000],
            [['model_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblModel::className(), 'targetAttribute' => ['model_id' => 'model_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'repair_id' => 'Repair ID',
            'repair_name' => 'Repair Name',
            'repair_description' => 'Repair Description',
            'purchase_price' => 'Purchase Price',
            'sale_price' => 'Sale Price',
            'model_id' => 'Model ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblOrders()
    {
        return $this->hasMany(TblOrder::className(), ['repair_id' => 'repair_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModel()
    {
        return $this->hasOne(TblModel::className(), ['model_id' => 'model_id']);
    }
}
