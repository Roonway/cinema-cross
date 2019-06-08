<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PhoneEmployee */

$this->title = 'Update Phone Employee: ' . $model->employee_id;
$this->params['breadcrumbs'][] = ['label' => 'Phone Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->employee_id, 'url' => ['view', 'employee_id' => $model->employee_id, 'phone' => $model->phone]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phone-employee-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
