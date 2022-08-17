<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    protected $table = "site_settings";

    public $fillable = [
        'company_name','short_logo','full_logo','phone','email','address','facebook','instagram','twitter','youtube','blog_image','blog_tag_image','blog_cat_image','newsletter'
    ];
}
