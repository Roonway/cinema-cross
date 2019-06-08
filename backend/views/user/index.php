<?php

use backend\models\UserSearch;
use kartik\grid\ActionColumn;
use kartik\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/**
 * @var $user \common\models\User
 */
$user = Yii::$app->user->identity;

$this->title = 'Usuários';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Cadastrar Usuário', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [

                'username',
                'email:email',
                [
                    'attribute' => 'status',
                    'value' => 'statusText'
                ],
                'created_at:date',


                [
                    'class' => ActionColumn::class,
                    'width' => '120px',
                    'visibleButtons' => [
                        'view' => false,
                        'update' => true,
                        'delete' => function (UserSearch $model){
                            return $model->id != Yii::$app->user->id;
                        }
                    ],
                    'buttonOptions' => [
                        'class' => 'btn btn-sm btn-default'
                    ],
                    'updateOptions' => [
                        'class' => 'btn btn-sm btn-primary'
                    ],
                    'deleteOptions' => [
                        'class' => 'btn btn-sm btn-danger'
                    ],
                ],
            ],
        ]); ?>
    </div>
</div>
