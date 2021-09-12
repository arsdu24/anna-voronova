<?php

namespace App\Http\Controllers;

use App\Article;
use App\Banner;
use App\Category;
use App\BlogCategory;
use App\BlogTag;
use App\Collection;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SiteSettings;

class SearchController extends Controller
{
    public function search(Request $request)
    {   
        $user=Auth::user();
        $categories = Category::all();
        $collections = Collection::all();
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
            };
        }
        $blog_category = BlogCategory::all();
        $tags = BlogTag::all();
        $articles = Article::orderby('created_at','desc')->where('published','=','1')->paginate(15);
        $date = strtotime("-3 days");
        $startdate = date('Y-m-d',$date);
        $recents_articles =  Article::whereDate('created_at', '>=', $startdate)->where('published','=','1')->orderby('created_at','desc')->get();

        $q = $request->q;
        if($request->type=='product'){
            $products = Product::where('published','=',1)
                                ->where(function($query ) use($q) {
                                    $query->where('name','LIKE','%'.$q.'%');
                                    $query->orWhere('excerpt','LIKE','%'.$q.'%');
                                })
                                ->paginate(15);
            $search = $products->take(10);
            $site = SiteSettings::first();
            return view('pages.search_result',['user'=>$user,'site'=>$site,'categories'=>$categories,'cart'=>$cart,'results'=>$products,'q'=>$q,'search'=>$search,'collections'=>$collections]);

        }
        elseif($request->type=='blog'){
            $articles = Article::where('published','=',1)
                                ->where('title','LIKE','%'.$q.'%')
                                ->orWhere('excerpt','LIKE','%'.$q.'%')
                                ->paginate(15);
            $search = $articles->take(10);
            $site = SiteSettings::first();
            return view('pages.search_result',['user'=>$user,'site'=>$site,'categories'=>$categories,'cart'=>$cart,'q'=>$q,'results'=>$articles,'search'=>$search,'collections'=>$collections]);

            
        }
        elseif($request->type=='search'){
            $articles =  Article::where('title','LIKE','%'.$q.'%')
                                ->orWhere('excerpt','LIKE','%'.$q.'%')
                                ->orWhere('id','LIKE','%'.$q.'%')
                                ->get();
            $products = Product::where('name','LIKE','%'.$q.'%')
                                ->orWhere('excerpt','LIKE','%'.$q.'%')
                                ->orWhere('id','LIKE','%'.$q.'%')
                                ->get();
            $collection = Collection::where('title','LIKE','%'.$q.'%')
                                ->orWhere('id','LIKE','%'.$q.'%')
                                ->get();
            $orders = Order::where('status','<>','Draft')
                        ->where(function ($query) use ($q) {
                            $query->where('serial_number','LIKE','%'.$q.'%');
                            $query->orWhere('id','LIKE','%'.$q.'%');
                            $query->orWhere('status','LIKE','%'.$q.'%');
                            $query->orWhere('contact','LIKE','%'.$q.'%');
                        })->get(); 
            
            $result = array(
                'Articles' => $articles,
                'Products' => $products,
                'Collections' => $collection,
                'Orders' => $orders,
            );
            return view('blocks.admin_navbar_h',['result'=> $result]);
        }
    }
}
