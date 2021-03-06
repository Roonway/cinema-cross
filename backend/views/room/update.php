<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Room */

$this->title = 'Update Room: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="room-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
