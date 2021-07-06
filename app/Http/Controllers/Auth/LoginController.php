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

    public function login(Request $request)
    {   
        $OldUser= Auth::user();
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $NewUser=Auth::user();
            switch ($NewUser->role)
            {
            case 1:
                if($OldUser && $OldUser->role == 3){$OldUser->delete();};
                return redirect()->intended('/admin');
            break;
            case 2:
                if($OldUser && $OldUser->role == 3){
                    foreach($OldUser->orders as $order){
                        $order->user()->dissociate();
                        $order->user()->associate(Auth::user());
                        $order->save();
                        }
                $OldUser->delete();
                }
                return redirect()->intended('/client');
            break;
            }
        }
        return back()->withInput($request->only('email', 'remember'));
    }

}

