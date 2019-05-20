<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblRepair */

$this->title = 'Create   Repair';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Repairs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-repair-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
