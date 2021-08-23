<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $fillable = [
        'tags','title','thumbnail','content','excerpt','author'
    ];

    public function category(){
        return $this->belongsTo(BlogCategory::class);
    }
}
