<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blogs_category';
    protected $fillable = [
        'name',
    ];

    public function aticles(){
        return $this->hasMany(Article::class);
    }
}
