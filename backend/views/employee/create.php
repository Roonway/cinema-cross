<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Employee */

$this->title = 'Cadastro de Empregados';
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
