<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Client */

$this->title = 'Cadastro de Cliente';
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
