<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $table ="collections";
    protected $fillable = [
        'title', 'description', 'thumbnail'
    ];

    protected function products(){
        return $this->belongsToMany('App\Product');
    }
}
