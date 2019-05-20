<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TblRepair */

$this->title = 'Update Tbl Repair: ' . $model->repair_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Repairs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->repair_id, 'url' => ['view', 'id' => $model->repair_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-repair-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
