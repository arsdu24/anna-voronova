<?php
    
    namespace App\Http\Middleware;
    
    use Closure;
    use Illuminate\Support\Facades\Auth;
    
    class RedirectIfAuthenticated
    {
        public function handle($request, Closure $next, $guard = null)
        {  
           
            if (Auth::guard($guard)->check() && Auth::user()->role == 1) {
                return redirect('/admin');
            }
            return $next($request);
        }
    }
