<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Genre */

$this->title = 'Update Genre: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="genre-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
