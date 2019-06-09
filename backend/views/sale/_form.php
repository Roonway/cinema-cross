<?php


use common\models\Client;
use common\models\Product;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Sale */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sale-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'product_id')->widget(Select2::class, [
            'data' => ArrayHelper::map(Product::find()->all(), 'id', 'name'),
            'theme' => Select2::THEME_DEFAULT,
            'pluginOptions' => [
                'placeholder' => 'Escolha um Produto',
            ]]) ?>

        <?= $form->field($model, 'client_id')->widget(Select2::class, [
            'data' => ArrayHelper::map(Client::find()->all(), 'id', 'name'),
            'theme' => Select2::THEME_DEFAULT,
            'pluginOptions' => [
                'placeholder' => 'Escolha um Cliente',
            ]]) ?>

        <?= $form->field($model, 'quantity')->textInput(['type' => 'number','min' => 0]) ?>

        <?= $form->field($model, 'total_price')->textInput() ?>

        <?= $form->field($model, 'sale_date')->textInput(['type' => 'datetime']) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
