<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Guest extends Model 
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
