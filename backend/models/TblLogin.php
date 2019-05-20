<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_login".
 *
 * @property integer $login_id
 * @property string $username
 * @property string $password
 * @property integer $lgtype_id
 *
 * @property TblLoginType $lgtype
 */
class TblLogin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_login';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'lgtype_id'], 'required'],
            [['lgtype_id'], 'integer'],
            [['username', 'password'], 'string', 'max' => 100],
            [['lgtype_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblLoginType::className(), 'targetAttribute' => ['lgtype_id' => 'lgtype_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'login_id' => 'Login ID',
            'username' => 'Username',
            'password' => 'Password',
            'lgtype_id' => 'Lgtype ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLgtype()
    {
        return $this->hasOne(TblLoginType::className(), ['lgtype_id' => 'lgtype_id']);
    }
}
