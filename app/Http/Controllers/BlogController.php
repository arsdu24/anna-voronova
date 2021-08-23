<?php

namespace App\Http\Controllers;

use App\Article;
use App\BlogCategory;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        $user = Auth::user();
        $categories = Category::all();
        $cart = null;
        foreach($user->orders as $order){
            if($order->status == "Draft"){
                $cart=$order;break;
            }
        }
        $blog_category = BlogCategory::all();
        $articles = Article::orderby('created_at','asc')->paginate(15);
        return view('pages.blogs',['categories'=>$categories,'user'=>$user,'cart'=>$cart,'articles'=>$articles,'blog_category'=>$blog_category]);
    }

    public function blogPage(Article $article){
        $user = Auth::user();
        $categories = Category::all();
        $cart = null;
        foreach($user->orders as $order){
            if($order->status == "Draft"){
                $cart=$order;break;
            }
        }
        $blog_categories = BlogCategory::all();
        return view('pages.client_blogPage',['categories'=>$categories,'user'=>$user,'cart'=>$cart,'article'=>$article,'blog_category'=>$blog_categories]);
    }

}
