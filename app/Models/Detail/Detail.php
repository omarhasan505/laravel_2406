<?php

namespace App\Models\Detail;

use App\Models\Order\Order;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public function orders(){
        return $this->belongsTo(Order::class);
    }
    protected $fillable = [
        'order_id',
        'product_name',
        'quantity',
        'price',
        'subtotal',
    ];
}
