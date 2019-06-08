<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Sale */

$this->title = $model->product_id;
$this->params['breadcrumbs'][] = ['label' => 'Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sale-view box box-primary">
    <div class="box-header">
        <?= Html::a('Update', ['update', 'product_id' => $model->product_id, 'client_id' => $model->client_id], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'product_id' => $model->product_id, 'client_id' => $model->client_id], [
            'class' => 'btn btn-danger btn-flat',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'product_id',
                'client_id',
                'quantity',
                'total_price',
                'sale_date',
                'created_at:datetime',
            ],
        ]) ?>
    </div>
</div>
