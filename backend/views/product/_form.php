<?php

use kartik\number\NumberControl;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
/** NumberControl usado no imput http://demos.krajee.com/number */

?>

<div class="product-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body">

        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?= $form->field($model, 'unit_price')->widget(NumberControl::class, [
                            'name' => 'Preço Unitário',
                            'maskedInputOptions' => [
                                'prefix' => 'R$ ',
                                'groupSeparator' => '.',
                                'radixPoint' => ','
                            ],
                            'displayOptions' => [
                                'placeholder' => 'Insira o Preço'
                            ],
                        ])?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
            </div>
        </div>



    </div>
    <div class="box-footer">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
