<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PhoneClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phone Clients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phone-client-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Phone Client', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'client_id',
                'phone',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>