<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{  
    protected $table = 'product';

    protected $fillable = [
        'name', 'excerpt', 'thumbnail', 'price', 'sale_price','content','views'
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
    public function collections(){
        return $this->belongsToMany('App\Collection');
    }
    
    public function toSearchableArray()
    {
    $array = $this->toArray();
        
    return array('excerpt' => $array['excerpt'],'name' => $array['name']);
    }
}
