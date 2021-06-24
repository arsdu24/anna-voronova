<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo()
    {
        switch (Auth::user()->role)
        {
            case 1:
                $this->redirectTo = '/admin';
                return $this->redirectTo;
            break;
            case 2:
                $this->redirectTo = '/client';
                return $this->redirectTo;
            break;
            case 3:
                $this->redirectTo = '/guest';
                return $this->redirectTo;
            break;
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:client')->except('logout');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
}

