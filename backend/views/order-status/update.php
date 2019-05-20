<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblOrderStatus */

$this->title = 'Update Tbl Order Status: ' . $model->order_status_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Order Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->order_status_id, 'url' => ['view', 'id' => $model->order_status_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-order-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
