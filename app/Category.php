<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ="categories";
    protected $fillable = [
        'title', 'description', 'thumbnail'
    ];

    protected function products(){
        return $this->belongsToMany('App\Product');
    }
}
