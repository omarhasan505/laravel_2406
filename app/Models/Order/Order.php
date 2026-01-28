<?php

namespace App\Models\Order;

use App\Models\Detail\Detail;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function details(){
        return $this->hasMany(Detail::class);
    }
    protected $fillable = [
        'name',
        'email',
        'phone',
        'amount',
        'status',
        'address',
        'transaction_id',
        'currency',
        'quantity',
    ];
}
