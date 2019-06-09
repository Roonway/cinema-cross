<?php

use common\models\Room;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Seat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seat-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

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
