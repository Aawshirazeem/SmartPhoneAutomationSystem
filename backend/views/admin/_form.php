<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblAdmin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'admin_f_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_l_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_addr')->textInput(['maxlength' => true]) ?>
	
	   <?= $form->field($model, 'admin_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_addr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
