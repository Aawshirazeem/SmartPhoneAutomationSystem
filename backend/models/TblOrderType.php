<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_order_type".
 *
 * @property integer $order_type_id
 * @property string $order_type_name
 *
 * @property TblOrder[] $tblOrders
 */
class TblOrderType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_order_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_type_name'], 'required'],
            [['order_type_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_type_id' => 'Order Type ID',
            'order_type_name' => 'Order Type Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblOrders()
    {
        return $this->hasMany(TblOrder::className(), ['order_type_id' => 'order_type_id']);
    }
}
