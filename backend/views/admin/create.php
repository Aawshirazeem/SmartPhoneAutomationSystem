<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TblAdmin */

$this->title = 'Create Tbl Admin';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-admin-create">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
