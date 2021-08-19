<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class ClientController extends Controller
{    
    public function index()
    {   $orders=Auth::user()->orders->reverse();
        $categories = Category::all();
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        return view('pages.client',['orders'=>$orders, 'user'=>Auth::user(),'categories'=>$categories,'cart_data'=>$cart_data]);
    }
}
