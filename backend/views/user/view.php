<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

/**
 * @var $user \common\models\User
 */
$user = Yii::$app->user->identity;

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view box box-primary">
    <div class="box-header">
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>
        <?php if ($user->id != $model->id && $user->isSuperAdmin) : ?>
            <?= Html::a('Excluir', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger btn-flat',
                'data' => [
                    'confirm' => 'Tem certeza que deseja EXCLUIR esse usuário?',
                    'method' => 'post',
                ],
            ]) ?>
        <?php endif; ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [

                'username',
                'email:email',
                'employee_id',
                'statusText',
                'created_at:date',
                'updated_at:date',
            ],
        ]) ?>
    </div>
</div>
