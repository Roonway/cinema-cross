<?php

use common\models\Room;
use common\models\Employee;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'cpf')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'birthday')->textInput(['type' => 'date','min' => 1900]) ?>

        <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'district')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'room_id')->widget(Select2::class, [
                'data' => ArrayHelper::map(Room::find()->all(), 'id','id'),
                'theme' => Select2::THEME_DEFAULT,
                'pluginOptions' => [
                        'placeholder' => 'Escolha uma sala'
                ]
        ]) ?>

        <?= $form->field($model, 'manager')->widget(Select2::class,[
                'data' => ArrayHelper::map(Employee::find()->all(),'id','name'),
                'theme' => Select2::THEME_DEFAULT,
                'pluginOptions' => [
                        'placeholder' => 'Escolha um gerente'
                ]
        ]) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
