<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblTechnician */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-technician-form col-lg-4 col-lg-offset-3"">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tech_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_l_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_addr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
