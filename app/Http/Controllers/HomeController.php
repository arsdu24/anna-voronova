<?php

namespace App\Http\Controllers;

use App\Article;
use App\Banner;
use App\Category;
use App\Collection;
use App\Product;
use App\ShippingDetail;
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
        $bestSellerProducts = Product::where('published',1)->withCount(['cartItems' => function ($query) {
          $query->whereHas('order', function ($query2) {
            $query2->where('status','!=','Draft');
          });
        }])->orderby("cart_items_count",'desc')->take(4)->get();
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
        $blogs = Article::orderby('id','desc')->take(6)->get();
        $site = SiteSettings::first();
        $details = ShippingDetail::all();
        if($details->count()==0){
          DB::table('shipping_details')->insert([
              [
                  'icon'=>'fas fa-plane-departure',
                  'title'=>'Free Worldwide Shipping',
                  'subtitle'=>'On all orders over $75.00',
                  'description'=>'Free Worldwide Shipping'
              ],
              [
                  'icon'=>'far fa-credit-card',
                  'title'=>'100% Payment Secure',
                  'subtitle'=>'We ensure secure payment with PEV',
                  'description'=>'100% Payment Secure'

              ],
              [
                  'icon'=>'fas fa-share-square',
                  'title'=>'30 Days Return',
                  'subtitle'=>'Return it within 20 day for an exchange',
                  'description'=>'30 Days Return'

              ]
          ]);
          $details = ShippingDetail::all();
      }
        return view('pages.index',['newsletter'=>unserialize($site->newsletter),'details'=>$details,'categories'=>$categories,'blogs'=>$blogs,'bestseller'=>$bestSellerProducts,'user'=>$user,'cart'=>$cart,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'slides'=>$slides,'site'=>$site,'firstBanner'=>$firstBanner,'secondBanner'=>$secondBanner, 'treding'=>$Trending_products,'collections'=>$collections]);
    }
}
