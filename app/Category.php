<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ="categories";
    protected $fillable = [
        'title', 'description', 'thumbnail'
    ];

    protected function products(){
        return $this->hasMany('App\Products');
    }
}
