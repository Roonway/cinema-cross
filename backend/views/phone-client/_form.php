<?php

use common\models\Client;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PhoneClient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phone-client-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'client_id')->widget(Select2::class,[
                'data' => ArrayHelper::map(Client::find()->all(),'id','name'),
                'theme' => Select2::THEME_DEFAULT,
                'pluginOptions' => [
                        'placeholder' => 'Escolha um Cliente'
                ]
        ]) ?>

        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
