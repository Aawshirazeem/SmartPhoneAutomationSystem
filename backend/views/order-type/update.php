<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblOrderType */

$this->title = 'Update Tbl Order Type: ' . $model->order_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Order Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->order_type_id, 'url' => ['view', 'id' => $model->order_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-order-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
