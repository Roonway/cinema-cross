<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sale */

$this->title = 'Update Sale: ' . $model->product_id;
$this->params['breadcrumbs'][] = ['label' => 'Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_id, 'url' => ['view', 'product_id' => $model->product_id, 'client_id' => $model->client_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sale-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
