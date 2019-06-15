<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Entrar';

?>

<div class="login-box">

    <div class="login-logo row">
        <div class="col-md-6">
            <img src="/images/cinema.gif">
        </div>
        <div class="col-md-6">
            <h1>Cinema<br>Planet</h1>
        </div>
    </div>


    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Entre para inciar sua sessão</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'email', [
                'options' => ['class' => 'form-group has-feedback'],
                'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
            ])
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('email')]) ?>

        <?= $form
            ->field($model, 'password', [
                'options' => ['class' => 'form-group has-feedback'],
                'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
            ])
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

        <div class="row">
            <div class="col-xs-8">
                <?= $form->field($model, 'rememberMe')->checkbox()->label('Lembrar de mim') ?>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?= Html::submitButton('Entrar', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
            <!-- /.col -->
        </div>
        <?php ActiveForm::end(); ?>

        <a href="#">Recuperar Senha</a><br>
        <!--<a href="register.html" class="text-center">Register a new membership</a> -->
    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
