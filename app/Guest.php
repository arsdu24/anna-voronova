<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Guest extends Model implements JWTSubject 
{
    use Notifiable;

    protected $table = "users" ;
    protected $guard = 'guest';

    protected $fillable = [
        'role', 'name','email','password',
    ];
    
    public function orders(){
        return $this->hasMany('App\Order');
     } 

    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function cart(){
        return $this->hasOne('App\Cart');
    }
    
    public function getJWTCustomClaims() {
        return [];
    }    
}
