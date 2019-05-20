<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TblAdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Admins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-admin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Admin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'admin_id',
            'admin_f_name',
            'admin_l_name',
            'admin_phone',
            'admin_email:email',
            // 'admin_addr',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
