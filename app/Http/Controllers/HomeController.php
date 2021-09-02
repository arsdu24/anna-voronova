<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use App\Collection;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   $user = Auth::user();
        $categories = Category::all();
        $collections = Collection::all();
        $cart = null;
        foreach($user->orders as $order){
            if($order->status == "Draft"){
                $cart=$order;break;
            }
        }
        $slides = Banner::where('is_slide','=',1)->get();
        $banners = Banner::where('is_slide','=',0)->get();
        return view('pages.index',['categories'=>$categories,'user'=>$user,'cart'=>$cart,'slides'=>$slides,'banners'=>$banners,'collections'=>$collections]);
    }
}
