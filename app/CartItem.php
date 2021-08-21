<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{   
    protected $table = 'cart_item';
    protected $fillable = [
        'quantity','product_id','price','order_id'
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
