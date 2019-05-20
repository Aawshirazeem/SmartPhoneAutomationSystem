<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblAdminSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-admin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'admin_id') ?>

    <?= $form->field($model, 'admin_f_name') ?>

    <?= $form->field($model, 'admin_l_name') ?>

    <?= $form->field($model, 'admin_phone') ?>

    <?= $form->field($model, 'admin_email') ?>

    <?php // echo $form->field($model, 'admin_addr') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
