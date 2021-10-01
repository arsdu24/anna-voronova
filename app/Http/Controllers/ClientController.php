<?php

namespace App\Http\Controllers;

use App\Category;
use App\Collection;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\SiteSettings;

class ClientController extends Controller
{    
    public function index()
    {   $orders=Auth::user()->orders->where('status','<>','Draft')->reverse();
        $user = Auth::user();
        $categories = Category::all();
        $collections = Collection::all();
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
        return view('pages.client',['orders'=>$orders,'site'=>$site,'user'=>Auth::user(),'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'collections'=>$collections,'categories'=>$categories,'cart'=>$cart]);
    }
}
