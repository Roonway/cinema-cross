<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PhoneClient */

$this->title = 'Create Phone Client';
$this->params['breadcrumbs'][] = ['label' => 'Phone Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phone-client-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
