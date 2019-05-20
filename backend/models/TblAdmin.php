<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_admin".
 *
 * @property integer $admin_id
 * @property string $admin_f_name
 * @property string $admin_l_name
 * @property string $admin_phone
 * @property string $admin_email
 * @property string $admin_addr
 */
class TblAdmin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_f_name', 'admin_l_name', 'admin_phone', 'admin_email', 'admin_addr'], 'required'],
            [['admin_f_name', 'admin_l_name', 'admin_phone', 'admin_email'], 'string', 'max' => 100],
            [['admin_addr'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => 'Admin ID',
            'admin_f_name' => 'Admin F Name',
            'admin_l_name' => 'Admin L Name',
            'admin_phone' => 'Admin Phone',
            'admin_email' => 'Admin Email',
            'admin_addr' => 'Admin Addr',
        ];
    }
}
