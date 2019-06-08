<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empregados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Cadastrar Empregado', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],


                'name',
                'email:email',
                'city',
                'created_at:date',


                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
