<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\modules\admin\controllers;

/**
 * Description of MainController
 *
 * @author Krupy
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
