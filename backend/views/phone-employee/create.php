<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PhoneEmployee */

$this->title = 'Create Phone Employee';
$this->params['breadcrumbs'][] = ['label' => 'Phone Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phone-employee-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
