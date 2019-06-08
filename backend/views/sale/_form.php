<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Sale */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sale-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'product_id')->textInput() ?>

        <?= $form->field($model, 'client_id')->textInput() ?>

        <?= $form->field($model, 'quantity')->textInput() ?>

        <?= $form->field($model, 'total_price')->textInput() ?>

        <?= $form->field($model, 'sale_date')->textInput() ?>

        <?= $form->field($model, 'created_at')->textInput() ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
