<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    protected $fillable = [
        'name','slug',
    ];

    public function articles(){
        return $this->belongsToMany('App\Article');
    }
}
