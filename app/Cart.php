<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'totalPrice','user_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function items(){
        return $this->hasMany('App\CartItem');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }
}
