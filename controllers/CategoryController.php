<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;

/**
 * Контроллер, отвечающий за отображение категорий и поиск товаров
 *
 */
class CategoryController extends AppController
{
    public function actionView($id)
    {
        $category = Category::findOne($id);
        if(empty($category)){
            throw new \yii\web\NotFoundHttpException('Категория отсутствует...');
        }    
        $this->setMeta(\Yii::$app->name . " | {$category->title}", $category->keywords, $category->description);
        $products = Product::find()->where(['category_id' => $id])->all();
        return $this->render('view', compact('products', 'category'));
    }
    
    public function actionSearch() 
    {
        $search = trim(\Yii::$app->request->get('search'));
        $this->setMeta(\Yii::$app->name . " | Поиск: {$search}");
        if(!$search){
            return $this->render('search');
        }
        $products = Product::find()->where(['like', 'title', $search])->all();
        return $this->render('search', compact('products', 'search'));
    }
}
