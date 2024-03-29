<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-order-form col-lg-4 col-lg-offset-3"">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_type_id')->textInput() ?>

    <?= $form->field($model, 'order_date')->textInput() ?>

    <?= $form->field($model, 'order_status_id')->textInput() ?>

    <?= $form->field($model, 'repair_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
