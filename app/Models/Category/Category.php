<?php

namespace App\Models\Category;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subCategory(){
        return $this->hasMany(self::class , 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function products(){
        return $this->hasMany(Product::class , 'category_id');
    }
}
