<?php
namespace backend\components;

use Yii;

/**
 * Extended yii\web\User
 *
 * This allows us to do "Yii::$app->user->something" by adding getters
 * like "public function getSomething()"
 *
 * So we can use variables and functions directly in `Yii::$app->user`
 */
class User extends \yii\web\User
{
    public function getEmal()
    {
        return \Yii::$app->user->identity->email;
    }

    public function getLogintyp()
    {
        return \Yii::$app->user->identity->lgtype_id;
    }
}