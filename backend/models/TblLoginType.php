<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_login_type".
 *
 * @property integer $lgtype_id
 * @property string $lgtype_name
 *
 * @property TblLogin[] $tblLogins
 */
class TblLoginType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_login_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lgtype_name'], 'required'],
            [['lgtype_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lgtype_id' => 'Lgtype ID',
            'lgtype_name' => 'Lgtype Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblLogins()
    {
        return $this->hasMany(TblLogin::className(), ['lgtype_id' => 'lgtype_id']);
    }
}
