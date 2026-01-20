<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = 'post'; // Specify custom table name if different from 'posts'
    protected $fillable = [ 'title', 'content', 'published' ]; // Allow mass assignment for these fields

    protected $guarded = ['id']; // Prevent mass assignment for the 'id' field

    public function comments() {
        return $this->hasMany(Comment::class);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
