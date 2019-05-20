<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblRepairSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-repair-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'repair_id') ?>

    <?= $form->field($model, 'repair_name') ?>

    <?= $form->field($model, 'repair_description') ?>

    <?= $form->field($model, 'purchase_price') ?>

    <?= $form->field($model, 'sale_price') ?>

    <?php // echo $form->field($model, 'model_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
