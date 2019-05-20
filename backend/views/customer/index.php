<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblCustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '  Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-customer-index">

     

    <p>
        <?= Html::a('Create   Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cus_id',
            'cus_f_name',
            'cus_l_name',
            'cus_phone',
            'cus_email:email',
              'cus_addr',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
