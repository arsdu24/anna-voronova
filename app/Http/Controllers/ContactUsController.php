<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Collection;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\SiteSettings;

class ContactUsController extends Controller
{
     public function index()
    {
        $user = Auth::user();
        $categories = Category::all();
        $collections = Collection::all();
        $cart = null;
        foreach($user->orders as $order){
            if($order->status == "Draft"){
                $cart=$order;break;
            }
        }
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
        $site = SiteSettings::first();
        return view('pages.contact-us',['categories'=>$categories,'user'=>$user,'cart'=>$cart,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'site'=>$site,'collections'=>$collections]);
    }
    public function sendEmail(Request $request)
    {
        $site = SiteSettings::first();
        $to = $site->email;
        $headers = 'From:'.$request->from;
        $subject = 'New message from site ';
        $message = $request->name.' :'.$request->message;
        mail($to,$subject,$message,$headers);
        return redirect()->back();
    }
}
