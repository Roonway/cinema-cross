<?php

use common\models\Room;
use common\models\Movie;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Session */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="session-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'hour')->textInput(['type' => 'time']) ?>

        <?= $form->field($model, 'date')->textInput(['type' => 'date','min' => 1900]) ?>

        <?= $form->field($model, 'movie_id')->widget(Select2::class, [
            'data' => ArrayHelper::map(Movie::find()->all(), 'id', 'title'),
            'theme' => Select2::THEME_DEFAULT,
            'pluginOptions' => [
                'placeholder' => 'Escolha um Filme',
            ]]) ?>

        <?= $form->field($model, 'room_id')->widget(Select2::class, [
            'data' => ArrayHelper::map(Room::find()->all(), 'id', 'id'),
            'theme' => Select2::THEME_DEFAULT,
            'pluginOptions' => [
                'placeholder' => 'Escolha uma Sala',
            ]]) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
