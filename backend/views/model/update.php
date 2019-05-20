<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblModel */

$this->title = 'Update Tbl Model: ' . $model->model_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->model_id, 'url' => ['view', 'id' => $model->model_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
