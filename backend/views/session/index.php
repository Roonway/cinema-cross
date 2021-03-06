<?php

use kartik\grid\ActionColumn;
use kartik\grid\GridView;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\SessionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sessões';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="session-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Cadastrar Sessão', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,

            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [



                'hour',
                'date',
                'room_id',
                'created_at:date',

                [
                    'class' => ActionColumn::class,
                    'width' => '120px',
                    'visibleButtons' => [
                        'view' => true,
                        'update' => true,
                        'delete' => true,
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
