<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_order".
 *
 * @property integer $order_id
 * @property integer $order_type_id
 * @property string $order_date
 * @property integer $order_status_id
 * @property integer $repair_id
 *
 * @property TblRepair $repair
 * @property TblOrderType $orderType
 * @property TblOrderStatus $orderStatus
 */
class TblOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_type_id', 'order_date', 'order_status_id', 'repair_id'], 'required'],
            [['order_type_id', 'order_status_id', 'repair_id'], 'integer'],
            [['order_date'], 'safe'],
            [['repair_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblRepair::className(), 'targetAttribute' => ['repair_id' => 'repair_id']],
            [['order_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblOrderType::className(), 'targetAttribute' => ['order_type_id' => 'order_type_id']],
            [['order_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblOrderStatus::className(), 'targetAttribute' => ['order_status_id' => 'order_status_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'order_type_id' => 'Order Type ID',
            'order_date' => 'Order Date',
            'order_status_id' => 'Order Status ID',
            'repair_id' => 'Repair ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRepair()
    {
        return $this->hasOne(TblRepair::className(), ['repair_id' => 'repair_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderType()
    {
        return $this->hasOne(TblOrderType::className(), ['order_type_id' => 'order_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderStatus()
    {
        return $this->hasOne(TblOrderStatus::className(), ['order_status_id' => 'order_status_id']);
    }
}
