<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $fillable = [
        'tags','title','thumbnail','content','excerpt','author'
    ];
    protected $casts = [
        'published' => 'boolean',
    ];
    public function category(){
        return $this->belongsToMany(BlogCategory::class);
    }
}
