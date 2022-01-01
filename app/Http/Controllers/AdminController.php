<?php

namespace App\Http\Controllers;

use App\Collection;
use App\Order;
use App\Product;
use App\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {   $user = Auth::user(); 
        $site = SiteSettings::first();
        $Trending_products = Product::where('published',1)->orderby('views','desc')->take(5)->get();
        $bestSellerProducts = Product::where('published',1)->withCount(['cartItems' => function ($query) {
          $query->whereHas('order', function ($query2) {
            $query2->where('status','!=','Draft');
          });
        }])->orderby("cart_items_count",'desc')->take(5)->get();
        $arr = [];
        $arr['pending'] = Order::where('status','Pending')->count();
        $arr['active']=Order::where('status','Active')->count();
        $arr['ready']= Order::where('status','Ready')->count();
        $arr['finished']= Order::where('status','Finished')->count();
        return view('pages.admin',['user'=>$user,'site'=>$site,'bestseller'=>$bestSellerProducts,'treding'=>$Trending_products,'data'=>$arr]);
    }
}
