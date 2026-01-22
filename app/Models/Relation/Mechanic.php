<?php

namespace App\Models\Relation;

use App\Models\Relation\Car;
use App\Models\Relation\Owner;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    public function carOwner(){
        return $this->hasOneThrough(Owner::class , Car::class);
    }
}
