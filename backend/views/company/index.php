<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblCompanySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-company-index-form col-lg-7">

     

    <p>
        <?= Html::a('Create Tbl Company', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'company_id',
            'company_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
