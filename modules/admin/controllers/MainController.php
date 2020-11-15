<?php

namespace app\modules\admin\controllers;

/**
 * Контроллер, отвечающий за работу главной страницы админки
 *
 */
class MainController extends AppAdminController
{
    public function actionIndex()
    {
        $this->setMeta(\Yii::$app->name . "::Admin | Главная");
        $orders = \app\modules\admin\models\Order::find()->count();
        $products = \app\modules\admin\models\Product::find()->count();
        $categories = \app\modules\admin\models\Category::find()->count();
        return $this->render('index', compact('orders', 'products', 'categories'));
    }
}
