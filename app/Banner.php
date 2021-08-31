<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public $fillable = [
        'title','thumbnail','is_slide','excerpt','highlighted'
    ]; 
}
