<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblModelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '  Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-model-index-form col-lg-7 ">

     

    <p>
        <?= Html::a('Create Tbl Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'model_id',
            'model_name',
            'company_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
