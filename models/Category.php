<?php 

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Модель, отвечающая за работу категорий
 *
 */
class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }
}
