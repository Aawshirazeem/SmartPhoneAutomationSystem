<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblSalesman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-salesman-form col-lg-4 col-md-offset-3">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'saleman_f_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saleman_l_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saleman_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saleman_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saleman_addr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
