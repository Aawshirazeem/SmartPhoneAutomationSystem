<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_customer".
 *
 * @property integer $cus_id
 * @property string $cus_f_name
 * @property string $cus_l_name
 * @property string $cus_phone
 * @property string $cus_email
 * @property string $cus_addr
 */
class TblCustomer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cus_f_name', 'cus_l_name', 'cus_phone', 'cus_email', 'cus_addr'], 'required'],
            [['cus_f_name', 'cus_l_name', 'cus_phone', 'cus_email'], 'string', 'max' => 100],
            [['cus_addr'], 'string', 'max' => 550],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cus_id' => 'Cus ID',
            'cus_f_name' => ' First Name',
            'cus_l_name' => ' Last Name',
            'cus_phone' => ' Phone',
            'cus_email' => ' Email',
            'cus_addr' => ' Address',
        ];
    }
}
