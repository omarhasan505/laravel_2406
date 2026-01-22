<?php

namespace App\Models\Relation;

use App\Models\Relation\Post;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
