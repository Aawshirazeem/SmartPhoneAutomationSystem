<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblCustomer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-customer-form col-lg-4 col-lg-offset-3"">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cus_f_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cus_l_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cus_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cus_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cus_addr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
