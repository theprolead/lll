<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function skus(){
        return $this->hasMany(ProductSkus::class);
    }
}
