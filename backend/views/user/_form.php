<?php

use common\models\Employee;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body ">
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'username')->textInput() ?>
            </div>
            <div class="col-md-8">
                <?= $form->field($model, 'email')->textInput() ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'new_password')->passwordInput() ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'employee_id')->widget(Select2::class, [
                    'data' => ArrayHelper::map(Employee::find()->whereManager()->all(), 'id', 'name'),
                    'theme' => Select2::THEME_DEFAULT,
                    'pluginOptions' => [
                        'placeholder' => 'Escolha um Empregado ou Deixe em Branco Para SuperAdmin',
                        'allowClear' => true,
                    ],
                ]) ?>
            </div>
        </div>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
