<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use App\Guest;
use phpDocumentor\Reflection\Types\Void_;

class Authenticate extends Middleware{
    
    public function unauthenticated($request, $guards)
    {    
        $now = microtime(true);
        $guest = Guest::create([
            'name'=>'guest',
            'email'=>"guest.$now@ana-voronova.ru",
            'password'=>Hash::make("$now"),
            'role' => 3,
        ]);
        Auth::loginUsingId($guest->id,true);
    }

    protected function redirectTo($request)
    { 
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
