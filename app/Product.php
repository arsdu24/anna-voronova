<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'name', 'excerpt', 'thumbnail', 'price', 'sale_price','content'
    ];
    protected $casts = [
        'published' => 'boolean',
    ];
    public function reviews(){
        return $this->hasMany('App\Review');
    }
    public function categories(){
        return $this->belongsToMany('App\Category');
    }
    public function cartItems(){
        return $this->hasMany('App\CartItem');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
