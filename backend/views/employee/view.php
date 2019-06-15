<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Employee */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-view box box-primary">
    <div class="box-header">
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-flat',
            'data' => [
                'confirm' => 'Deseja Relamente Excluir Esse Funcionário?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
    <div class="box-body table-responsive">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'name',
                'email:email',
                'cpf',
                'birthday',
                'street',
                'number',
                'district',
                'city',
                'room_id',
                'manager',
                'created_at:datetime',
                'updated_at:datetime',
            ],
        ]) ?>
    </div>
</div>
