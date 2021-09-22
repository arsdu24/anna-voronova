<?php

namespace App\Http\Controllers\Auth;

use App\Category;
use App\Collection;
use App\Product;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Client;
use App\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:client');
    }

    public function showClientRegisterForm()
    {   
        $user= Auth::user();
        $categories =Category::all();
        $site = SiteSettings::first();
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
        }
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
        return view('auth.register', ['url' => 'client','categories'=>$categories,'site'=>$site,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'cart'=>$cart]);
    }

    protected function createClient(Request $request)
    {
        $this->validator($request->all())->validate();
        $client = Client::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => 2,
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login');
    }
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    
}
