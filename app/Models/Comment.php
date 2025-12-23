<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['author', 'content', 'Post_id'];

    protected $guarded = ['id'];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
