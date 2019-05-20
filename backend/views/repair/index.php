<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblRepairSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '  Repairs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-repair-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Repair', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'repair_id',
            'repair_name',
            'repair_description',
            'purchase_price',
            'sale_price',
            // 'model_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
