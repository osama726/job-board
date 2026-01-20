<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [ 'title' ]; // Allow mass assignment for these fields

    protected $guarded = ['id']; // Prevent mass assignment for the 'id' field

    public function posts() {
        return $this->belongsToMany(Post::class);
    }
}
