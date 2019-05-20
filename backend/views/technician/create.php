<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblTechnician */

$this->title = 'Create   Technician';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Technicians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-technician-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
