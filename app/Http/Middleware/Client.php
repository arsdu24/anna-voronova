<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Client
{
    public function handle($request, Closure $next)
    {   //role 1 = admin; role 2 = client; role 3 = guest
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->role != 1) {
            return $next($request);
        }
        else return redirect()->route('admin');
    }
}
