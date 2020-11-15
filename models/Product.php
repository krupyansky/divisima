<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Модель, отвечающая за работу продуктов
 *
 */
class Product extends ActiveRecord
{
    public static function tableName() 
    {
        return 'product';
    }
    
    public function getCategory() 
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
}
