<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblOrderStatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Order Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-order-status-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Order Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_status_id',
            'order_status_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
