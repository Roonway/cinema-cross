<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PhoneEmployee */

$this->title = $model->employee_id;
$this->params['breadcrumbs'][] = ['label' => 'Phone Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phone-employee-view box box-primary">
    <div class="box-header">
        <?= Html::a('Update', ['update', 'employee_id' => $model->employee_id, 'phone' => $model->phone], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'employee_id' => $model->employee_id, 'phone' => $model->phone], [
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
                'employee_id',
                'phone',
            ],
        ]) ?>
    </div>
</div>
