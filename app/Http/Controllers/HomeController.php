<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Tag;
use Illuminate\Support\Facades\DB;

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
        if(Banner::where('is_slide','=',0)->count()<2){
            DB::table('banners')->insert([
             [
                'title' => 'Under Trending Products block',
                'thumbnail' => 'banner4.jpg',
                'link' => '/products',
                'is_slide' => 0
              ],
              [
                'title' => 'Above Blog block',
                'thumbnail' => 'banner3_360x.jpg',
                'link' => '/blogs/news',
                'is_slide' => 0
              ]
            ]);
            }
        $firstBanner = Banner::where('is_slide','=',0)->where('title','Under Trending Products block')->first();
        $secondBanner = Banner::where('is_slide','=',0)->where('title','Above Blog block')->first();
        return view('pages.index',['categories'=>$categories,'user'=>$user,'cart'=>$cart,'slides'=>$slides,'firstBanner'=>$firstBanner,'secondBanner'=>$secondBanner]);
    }
}
