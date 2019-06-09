<?php

use kartik\grid\ActionColumn;
use kartik\grid\GridView;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\SaleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sale-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Cadastrar Vendas', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,

            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [



                'quantity',
                'total_price',
                'sale_date',
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
