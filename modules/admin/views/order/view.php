<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = "Заказ №{$model->id}";
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'created_at:datetime',
            'updated_at:datetime',
            'qty',
            'total',
            //'status',
            [
                'attribute' => 'status',
                'value' => $model->status ? '<span class="text-green">Закрыт</span>' : '<span class="text-red">Новый</span>',
                'format' => 'raw',
            ],
            'name',
            'email:email',
            'phone',
            'address',
            'note:ntext',
        ],
    ]) ?>

</div>

<?php $products = $model->orderProduct ?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Товары в заказе</h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Наименование</th>
                            <th>Количество</th>
                            <th>Цена</th>
                            <th>Сумма</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($products as $product):?>
                            <tr>
                                <td><?= $product->id ?></td>
                                <td><?= $product->title ?></td>
                                <td><?= $product->qty ?></td>
                                <td><?= $product->price ?></td>
                                <td><?= $product->total ?></td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>