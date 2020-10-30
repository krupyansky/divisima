<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use app\models\Product;
use yii\web\NotFoundHttpException;

/**
 * Description of ProductController
 *
 * @author Krupy
 */
class ProductController extends AppController
{
    
    public function actionView($id) 
    {
        $product = Product::findOne($id);
        if(empty($product)){
            throw new NotFoundHttpException('Продукт отсутствует...');
        }
        $this->setMeta(\Yii::$app->name . " | {$product->title}", $product->keywords, $product->description);
        return $this->render('view', compact('product'));
    }
    
}
