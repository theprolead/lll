<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSkus extends Model
{
    public function product(){
        return $this->hasOne(Product::class);
    }
    public function orders(){
        return $this->belongsToMany(Order::class,
            'order_items',
            'order_id',
            'sku_id'
        );
    }
}
