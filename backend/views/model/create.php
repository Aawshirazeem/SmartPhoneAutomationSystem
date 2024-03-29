<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblModel */

$this->title = 'Create  Model';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
