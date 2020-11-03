<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property string $content
 * @property float $price
 * @property float $old_price
 * @property string|null $description
 * @property string|null $keywords
 * @property string $img
 * @property int $is_last
 * @property int $is_new
 * @property int $is_sale
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }
    
    /**
     * {@inheritdoc}
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'title', 'content', 'img'], 'required'],
            [['category_id', 'is_last', 'is_new', 'is_sale'], 'integer'],
            [['content'], 'string'],
            [['price', 'old_price'], 'number'],
            [['title', 'description', 'keywords', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
            'title' => 'Название',
            'content' => 'Описание',
            'price' => 'Новая цена',
            'old_price' => 'Старая цена',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'img' => 'Изображение',
            'is_last' => 'Is Last',
            'is_new' => 'Is New',
            'is_sale' => 'Is Sale',
        ];
    }
}
