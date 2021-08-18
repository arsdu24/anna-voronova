<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{   
    protected $table = 'cart_item';
    protected $fillable = [
        'cart_id','quantity','product_id','price',
    ];

    public function cart(){
        return $this->belongsTo(Cart::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
