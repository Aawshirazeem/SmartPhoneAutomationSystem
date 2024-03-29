<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblCustomer */

$this->title = 'Create   Customer';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-customer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
