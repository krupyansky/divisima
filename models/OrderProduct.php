<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Description of OrderProduct
 *
 * @author Krupy
 */
class OrderProduct extends ActiveRecord
{
    
    public static function tableName(): string 
    {
        return 'order_product';
    }
    
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'title', 'price', 'qty', 'total'], 'required'],
            [['order_id', 'product_id', 'qty'], 'integer'],
            [['price' ,'total'], 'number'],
            [['title'], 'string', 'max' => 255],
        ];
    }
    
    public function saveOrderProducts($products, $order_id)
    {
        foreach ($products as $id => $product){
            $this->id = null;
            $this->isNewRecord = true;
            $this->order_id = $order_id;
            $this->product_id = $id;
            $this->title = $product['title'];
            $this->price = $product['price'];
            $this->qty = $product['qty'];
            $this->total = $product['qty'] * $product['price'];
            if(!$this->save()){
                return false;
            }
        }
        return true;
    }
    
}
