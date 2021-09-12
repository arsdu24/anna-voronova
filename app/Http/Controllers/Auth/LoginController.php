<?php
namespace App\Http\Controllers\Auth;

use App\Category;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\SiteSettings;
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
        $user=Auth::user();
        $categories=Category::all();
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
        }
        $site = SiteSettings::first();
        return view('auth.login',['categories'=>$categories,'cart'=>$cart,'site'=>$site]);
    }

    public function login(Request $request)
    {   
        $OldUser= Auth::user();
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->has('remember') ? true : false; 

        if (Auth::attempt($credentials,$remember)) {
            $NewUser=Auth::user();
            switch ($NewUser->role)
            {
            case 1:
                if($OldUser && $OldUser->role == 3){$OldUser->delete();};
                return redirect()->intended('/admin');
            break;
            case 2:
                if($OldUser && $OldUser->role == 3){
                    $hascart=0;
                    foreach($NewUser->orders as $order){
                        if($order->status == "Draft"){
                            $hascart=1;break;
                        }
                    }
                    foreach($OldUser->orders as $order){
                        if($hascart){
                            if($order->status!="Draft"){
                                $order->user()->dissociate();
                                $order->user()->associate(Auth::user());
                                $order->save();
                            }
                        }
                        else{
                        $order->user()->dissociate();
                        $order->user()->associate(Auth::user());
                        $order->save();
                        }
                    }
                    $OldUser->delete();
                }
                return redirect()->route('client');
            break;
            }
        }
        return back()->withInput($request->only('email', 'remember'));
    }

}

