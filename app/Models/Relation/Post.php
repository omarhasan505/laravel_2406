<?php

namespace App\Models\Relation;

// use Dom\Comment;
use App\Models\Relation\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments (){
        return $this->hasMany(Comment::class);
}
}
