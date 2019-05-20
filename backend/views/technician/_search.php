<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblTechnicianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-technician-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tech_id') ?>

    <?= $form->field($model, 'tech_name') ?>

    <?= $form->field($model, 'tech_l_name') ?>

    <?= $form->field($model, 'tech_phone') ?>

    <?= $form->field($model, 'tech_email') ?>

    <?php // echo $form->field($model, 'tech_addr') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
