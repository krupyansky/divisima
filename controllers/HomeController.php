<?php 

namespace app\controllers;

use app\models\Product;

/**
 * Контроллер, отвечающий за отображение главной страницы
 *
 */
class HomeController extends AppController
{
    public function actionIndex()
    {
        $last_products = Product::find()->where(['is_last' => 1])->all();
        $this->setMeta(\Yii::$app->name . " | Главная", "divisima, eCommerce, creative, html", "Divisima | eCommerce Template");
        return $this->render('index', compact('last_products'));
    }
}
