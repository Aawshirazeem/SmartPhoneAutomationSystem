<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_company".
 *
 * @property integer $company_id
 * @property string $company_name
 *
 * @property TblModel[] $tblModels
 */
class TblCompany extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name'], 'required'],
            [['company_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'company_name' => 'Company Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblModels()
    {
        return $this->hasMany(TblModel::className(), ['company_id' => 'company_id']);
    }
}
