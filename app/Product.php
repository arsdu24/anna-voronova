<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{   
    use Searchable;

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
    
    public function toSearchableArray()
    {
    $array = $this->toArray();
        
    return array('excerpt' => $array['excerpt'],'name' => $array['name']);
    }
}
