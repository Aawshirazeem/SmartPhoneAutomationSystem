<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_order_status".
 *
 * @property integer $order_status_id
 * @property string $order_status_name
 *
 * @property TblOrder[] $tblOrders
 */
class TblOrderStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_order_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_status_name'], 'required'],
            [['order_status_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_status_id' => 'Order Status ID',
            'order_status_name' => 'Order Status Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblOrders()
    {
        return $this->hasMany(TblOrder::className(), ['order_status_id' => 'order_status_id']);
    }
}
