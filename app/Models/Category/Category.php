<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subCategory(){
        return $this->hasMany(Category::class , 'parent_id');
    }
}
