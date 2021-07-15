<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'title', 'description', 'stars', 'published','user_id','product_id'
    ];

    public function user(){
        return $this->belongsTo('App\Client');
    }
     public function product(){
        return $this->belongsTo('App\Product');
     }
}
