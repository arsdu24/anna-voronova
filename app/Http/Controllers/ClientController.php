<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Auth;
use App\SiteSettings;

class ClientController extends Controller
{    
    public function index()
    {   $orders=Auth::user()->orders->where('status','<>','Draft')->reverse();
        $user = Auth::user();
        $categories = Category::all();
        $cart = null;
        foreach($user->orders as $order){
            if($order->status == "Draft"){
                $cart=$order;break;
            }
        }
        $site = SiteSettings::first();
        return view('pages.client',['orders'=>$orders,'site'=>$site,'user'=>Auth::user(),'categories'=>$categories,'cart'=>$cart]);
    }
}
