<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_technician".
 *
 * @property integer $tech_id
 * @property string $tech_name
 * @property string $tech_l_name
 * @property string $tech_phone
 * @property string $tech_email
 * @property string $tech_addr
 */
class TblTechnician extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_technician';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tech_name', 'tech_l_name', 'tech_phone', 'tech_email', 'tech_addr'], 'required'],
            [['tech_name', 'tech_l_name', 'tech_phone', 'tech_email'], 'string', 'max' => 100],
            [['tech_addr'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tech_id' => 'Tech ID',
            'tech_name' => 'Tech Name',
            'tech_l_name' => 'Tech L Name',
            'tech_phone' => 'Tech Phone',
            'tech_email' => 'Tech Email',
            'tech_addr' => 'Tech Addr',
        ];
    }
}
