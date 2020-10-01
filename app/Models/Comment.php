<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['name','email','body','comment_id','post_id','created_at','updated_at'];

    public function post(){
        return $this->belongsTo(Post::class);
    }

}
