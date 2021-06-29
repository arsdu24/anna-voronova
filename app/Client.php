<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Client extends Model implements JWTSubject
{
    use Notifiable;
    
    protected $table = "users" ;
    protected $guard = 'client';

    protected $fillable = [
        'name', 'email', 'password','role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    }    
}
