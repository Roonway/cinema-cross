<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PhoneClient */

$this->title = 'Update Phone Client: ' . $model->client_id;
$this->params['breadcrumbs'][] = ['label' => 'Phone Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->client_id, 'url' => ['view', 'client_id' => $model->client_id, 'phone' => $model->phone]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phone-client-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
