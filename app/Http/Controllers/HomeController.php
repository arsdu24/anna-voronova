<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use App\Collection;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\SiteSettings;

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
        if(Banner::where('is_slide','=',1)->count()<1){
            DB::table('banners')->insert([
             [
                'title' => 'See our new collection',
                'thumbnail' => 'slide11_1944x.png',
                'excerpt'=>'We brought something ',
                'highlighted' =>'for you ',
                'link' => '/products',
                'is_slide' => 1
              ],
            ]);
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
        if(!SiteSettings::first()){
                DB::table('site_settings')->insert([
                    [
                       'company_name' => ' Name',
                       'short_logo' => 'faviicon_32x32.jpg',
                       'full_logo' => 'logo.png',
                     ]
                   ]);
        }
        $firstBanner = Banner::where('is_slide','=',0)->where('title','Under Trending Products block')->first();
        $secondBanner = Banner::where('is_slide','=',0)->where('title','Above Blog block')->first();
        $Trending_products = Product::where('published',1)->orderby('views','desc')->take(4)->get();
        $site = SiteSettings::first();
        return view('pages.index',['categories'=>$categories,'user'=>$user,'cart'=>$cart,'slides'=>$slides,'site'=>$site,'firstBanner'=>$firstBanner,'secondBanner'=>$secondBanner, 'treding'=>$Trending_products,'collections'=>$collections]);
    }
}
