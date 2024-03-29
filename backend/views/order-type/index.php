<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblOrderTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Order Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-order-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Order Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_type_id',
            'order_type_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
