<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblSalesmanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Salesmen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-salesman-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Salesman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'saleman_id',
            'saleman_f_name',
            'saleman_l_name',
            'saleman_phone',
            'saleman_email:email',
             'saleman_addr',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
