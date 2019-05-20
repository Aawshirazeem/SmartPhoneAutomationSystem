<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_salesman".
 *
 * @property integer $saleman_id
 * @property string $saleman_f_name
 * @property string $saleman_l_name
 * @property string $saleman_phone
 * @property string $saleman_email
 * @property string $saleman_addr
 */
class TblSalesman extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_salesman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['saleman_f_name', 'saleman_l_name', 'saleman_phone', 'saleman_email', 'saleman_addr'], 'required'],
            [['saleman_f_name', 'saleman_l_name', 'saleman_phone', 'saleman_email'], 'string', 'max' => 100],
            [['saleman_addr'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'saleman_id' => 'Saleman ID',
            'saleman_f_name' => ' First Name',
            'saleman_l_name' => '  Last Name',
            'saleman_phone' => '  Phone',
            'saleman_email' => '  Email',
            'saleman_addr' => '  Address',
        ];
    }
}
