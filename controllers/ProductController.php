<?php

namespace app\controllers;

use app\models\Product;
use yii\web\NotFoundHttpException;

/**
 * Контроллер, отвечающий за детальный просмотр продукта
 *
 */
class ProductController extends AppController
{
    public function actionView($id) 
    {
        $product = Product::findOne($id);
        if (empty($product)) {
            throw new NotFoundHttpException('Продукт отсутствует...');
        }
        $this->setMeta(\Yii::$app->name . " | {$product->title}", $product->keywords, $product->description);
        return $this->render('view', compact('product'));
    }
}
