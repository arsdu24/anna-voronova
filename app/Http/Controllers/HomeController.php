<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Tag;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   $user = Auth::user();
        $categories = Category::all();
        $cart = null;
        foreach($user->orders as $order){
            if($order->status == "Draft"){
                $cart=$order;break;
            }
        }
        $slides = Banner::where('is_slide','=',1)->get();
        $banners = Banner::where('is_slide','=',0)->get();
        $Trending_products = Product::where('published',1)->orderby('views','desc')->take(4)->get();
        return view('pages.index',['categories'=>$categories,'user'=>$user,'cart'=>$cart,'slides'=>$slides,'banners'=>$banners,'treding'=>$Trending_products]);
    }
}
