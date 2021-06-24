<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Client
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { //role 1 = admin; role 2 = client; role 3 = guest
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->role == 1) {
            return redirect()->route('admin');
        }
        if (Auth::user()->role == 2) {
            return $next($request);
        }
        if (Auth::user()->role == 3) {
            return $next($request);
        }
    }
}
