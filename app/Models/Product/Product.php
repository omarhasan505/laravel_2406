<?php

namespace App\Models\Product;

use App\Models\Category\Category;
use App\Models\Image\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //* category

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
}
