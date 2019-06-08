<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Seat */

$this->title = 'Update Seat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Seats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="seat-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
