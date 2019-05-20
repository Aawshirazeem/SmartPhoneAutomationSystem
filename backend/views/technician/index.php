<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblTechnicianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '  Technicians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-technician-index">

     

    <p>
        <?= Html::a('Create Tbl Technician', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tech_id',
            'tech_name',
            'tech_l_name',
            'tech_phone',
            'tech_email:email',
             'tech_addr',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
