<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'totalPrice','user_id',
    ];

    public function user(){
        return $this->belongsTo('App/User');
    }

    public function items(){
        return $this->hasMany(CartItem::class);
    }
}
