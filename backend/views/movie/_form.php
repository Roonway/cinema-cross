<?php

use common\models\Director;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Movie */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'year')->textInput(['type' => 'number', 'min' => 1900]) ?>

        <?= $form->field($model, 'duration')->textInput() ?>

        <?= $form->field($model, 'indicative_classify')->textInput() ?>

        <?= $form->field($model, 'director_id')->widget(Select2::class, [
            'data' => ArrayHelper::map(Director::find()->all(), 'id', 'name'),
            'theme' => Select2::THEME_DEFAULT,
            'pluginOptions' => [
                'placeholder' => 'Escolha um Diretor',
            ]
        ]) ?>

        <?= $form->field($model, 'genre_id')->textInput() ?>

        <?= $form->field($model, 'created_at')->textInput() ?>

        <?= $form->field($model, 'updated_at')->textInput() ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
