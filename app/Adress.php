<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $table = 'addresses';
    protected $fillable = [
        'user_id','first_name','last_name','address1','address2','city','country','province','zip'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
