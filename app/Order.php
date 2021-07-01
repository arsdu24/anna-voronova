<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id','address', 'status'
    ];

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
