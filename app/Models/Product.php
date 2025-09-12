<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;
use App\Models\Shop;
class Product extends Model
{
    public function category(){
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }
    public function shop(){
        return $this->belongsTo(Shop::class, 'shop_id', 'id');
    }
}
