<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Session */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="session-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'hour')->textInput() ?>

        <?= $form->field($model, 'date')->textInput() ?>

        <?= $form->field($model, 'movie_id')->textInput() ?>

        <?= $form->field($model, 'room_id')->textInput() ?>

        <?= $form->field($model, 'created_at')->textInput() ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>