<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblCustomerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cus_id') ?>

    <?= $form->field($model, 'cus_f_name') ?>

    <?= $form->field($model, 'cus_l_name') ?>

    <?= $form->field($model, 'cus_phone') ?>

    <?= $form->field($model, 'cus_email') ?>

    <?php // echo $form->field($model, 'cus_addr') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
