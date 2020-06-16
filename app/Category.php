<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $guarded = [''];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
