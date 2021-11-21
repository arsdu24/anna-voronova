<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $fillable = [
        'title','thumbnail','content','excerpt','author','slug'
    ];
    protected $casts = [
        'published' => 'boolean',
    ];
    public function category(){
        return $this->belongsToMany(BlogCategory::class);
    }

    public function tags(){
        return $this->belongsToMany(BlogTag::class);
    }
}
