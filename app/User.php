<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
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

    public function CartItem(){
        return $this->hasMany('App\CartItem');
    }

    public function getJWTCustomClaims() {
        return [];
    }    
}
