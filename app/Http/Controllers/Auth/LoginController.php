<?php
namespace App\Http\Controllers\Auth;

use App\Category;
use App\Collection;
use App\Product;
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
        $collections= Collection::all();
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
        }
        $site = SiteSettings::first();
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
        return view('auth.login',['categories'=>$categories,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'cart'=>$cart,'collections'=>$collections,'site'=>$site]);
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
                    foreach($OldUser->addresses as $address){
                        $address->user()->dissociate();
                        $address->user()->associate(Auth::user());
                        $address->save();
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

