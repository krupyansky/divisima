<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать заказ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'created_at',
            [
                'attribute' => 'created_at',
                'format' => 'datetime',
            ],
            //'updated_at',
            [
                'attribute' => 'updated_at',
                'format' => 'datetime',
            ],
            'qty',
            'total',
            //'status',
            [
                'attribute' => 'status',
                'value' => function($data){
                    return $data->status ? '<span class="text-green">Закрыт</span>' : '<span class="text-red">Новый</span>';
                },
                'format' => 'raw',
            ],
            //'name',
            //'email:email',
            //'phone',
            //'address',
            //'note:ntext',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Действия',
            ],
        ],
    ]); ?>


</div>
