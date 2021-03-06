<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * Модель, отвечающая за оформление заказа
 *
 */
class Order extends ActiveRecord
{
    public static function tableName(): string 
    {
        return 'orders';
    }
    
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'address'], 'required'],
            ['note', 'string'],
            ['email', 'email'],
            [['created_at', 'updated_at'], 'safe'],
            ['qty', 'integer'],
            ['total', 'number'],
            ['status', 'boolean'],
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'phone' => 'Номер телефона',
            'address' => 'Адрес',
            'note' => 'Примечание',
        ];
    }
    
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],
        ];
    }
}
