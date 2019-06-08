<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Director */

$this->title = 'Create Director';
$this->params['breadcrumbs'][] = ['label' => 'Directors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="director-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
