<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_model".
 *
 * @property integer $model_id
 * @property string $model_name
 * @property integer $company_id
 *
 * @property TblCompany $company
 * @property TblRepair[] $tblRepairs
 */
class TblModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_model';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model_name', 'company_id'], 'required'],
            [['company_id'], 'integer'],
            [['model_name'], 'string', 'max' => 200],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblCompany::className(), 'targetAttribute' => ['company_id' => 'company_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'model_id' => 'Model ID',
            'model_name' => 'Model Name',
            'company_id' => 'Company ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(TblCompany::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblRepairs()
    {
        return $this->hasMany(TblRepair::className(), ['model_id' => 'model_id']);
    }
}
