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
    
    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    }    
}