<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id','address', 'status','subtotal','serial_number','contact','quantity','payment_method'
    ];

    public function items()
    {
        return $this->hasMany('App\CartItem');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function guest()
    {
        return $this->belongsTo('App\Guest');
    }
}
