<?php

namespace App\Http\Controllers;

use App\Article;
use App\BlogCategory;
use App\BlogTag;
use App\Category;
use App\Collection;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SiteSettings;
use Ausi\SlugGenerator\SlugGenerator;

class BlogController extends Controller
{
    public function index(){
        $user = Auth::user();
        $blog_category = BlogCategory::all();
        $categories = Category::all();
        $tags = BlogTag::all();
        $collections = Collection::all();
        $articles = Article::orderby('created_at','desc')->where('published','=','1');
        if(isset($_GET['category'])){
            $category = BlogCategory::where('name','=',$_GET['category'])->first();
            if($category){
            $id= $category->id;
            $articles=$articles->whereHas('category', function($q) use ($id) {
              $q->where('blog_category_id', $id);
           });
         }
        }
        $articles = $articles->paginate(15);
        $date = strtotime("-3 days");
        $startdate = date('Y-m-d',$date);
        $recents_articles =  Article::whereDate('created_at', '>=', $startdate)->where('published','=','1')->orderby('created_at','desc')->get();
        $cart = null;
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
        };

        $site = SiteSettings::first();
        return view('pages.blogs',['user'=>$user,'articles'=>$articles,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'site'=>$site,'category'=>$blog_category,'categories'=>$categories,'cart'=>$cart,'recent_articles'=>$recents_articles,'tags'=>$tags,'collections'=>$collections]);
    }
    
    public function categoriesList()
    {   
        $user = Auth::user();
        $blog_category = BlogCategory::paginate(15);
        $tags = BlogTag::all();
        $site = SiteSettings::first();
        return view('pages.admin_blog_cat',['user'=>$user,'site'=>$site,'categories'=>$blog_category,'tags'=>$tags]);
    }

    public function blogPage(Article $article){
        $user = Auth::user();
        $blog_categories = BlogCategory::all();
        $article_tags = array();
        $collections = Collection::all();
        foreach($article->tags as $tag){
          array_push($article_tags, $tag->id);
        }
        $date = strtotime("-3 days");
        $tags = BlogTag::all();
        $startdate = date('Y-m-d',$date);
        $recents_articles =  Article::whereDate('created_at', '>=', $startdate)->where('published','=','1')->orderby('created_at','desc')->get();
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
        }
        $site = SiteSettings::first();
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
        return view('pages.client_blogPage',['user'=>$user,'site'=>$site,'article'=>$article,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'categories'=>$blog_categories,'cart'=>$cart,'recent_articles'=>$recents_articles,'article_tags'=>$article_tags,'tags'=>$tags,'collections'=>$collections]);
    }

    public function admin_blogs(){
        $articles = Article::orderby('created_at','desc')->paginate(15);
        $user=Auth::user();
        $blog_category = BlogCategory::all();
        $tags = BlogTag::all();
        $site = SiteSettings::first();
        return view('pages.blogs_list',['articles'=>$articles,'site'=>$site,'user'=>$user,'categories'=>$blog_category,'tags'=>$tags]);

    }

    public function create_article(Request $request){
        $category=$request->category;
        $article=Article::create([
            'title'=>$request->title,
            'excerpt'=>$request->excerpt,
            'content'=>$request->content,
            'author'=>$request->author,
        ]);
        if($request->published=="on")$article->published = 1;
        else $article->published = 0;
        if($request->tags){
            $article->tags()->sync($request->tags);
          }
        else $article->tags()->detach();
        $article->category()->sync($category);
        if($request->file('image')){
            $image =$request->file('image');
            $imageName=$image->getClientOriginalName();
            $image->move('img',$imageName);
            $article->thumbnail=$imageName;
        }
        $article->save();
        return redirect()->back();
    }

    public function delete_article(Article $article){
        $article->delete();
        return redirect()->back();
    }

    public function article_update_page(Article $article){
        $blog_category = BlogCategory::all();
        $blog_tags = BlogTag::all();
        $article_tags = array();
        foreach($article->tags as $tag){
            array_push($article_tags, $tag->id);
          }
        $article_categories = array();
        foreach($article->category as $category){
        array_push($article_categories, $category->id);
        }
        $site = SiteSettings::first();
        return view('pages.admin_article',['user'=>Auth::user(),'site'=>$site,'article'=>$article,'categories'=>$blog_category,'cat'=>$article_categories,'tags'=>$article_tags,'blog_tags'=>$blog_tags]);

    }

    public function articleUpdate(Article $article,Request $request)
    {
     if($request->file('thumbnail')){
         $image=$request->file('thumbnail');
         $imageName=$image->getClientOriginalName();
         $image->move('img',$imageName);
         $article->thumbnail=$imageName;
     }
     if($request->tags){
        $article->tags()->sync($request->tags);
      }
     else $article->tags()->detach();

     $article->title=$request->title;
     $article->excerpt=$request->excerpt;
     if($request->published)$article->published=1;
     else $article->published =0;
     if($request->category){
        $article->category()->sync($request->category);
     }
     else $article->category()->detach();
     $article->content = $request->content;
     $article->author = $request->author;
     $article->save();
     return redirect()->back();
    }

    public function categoryCreate(Request $request)
    {
        BlogCategory::create([
            'name'=>$request->name
        ]);
        return redirect()->back();
    }

    public function categoryDelete(BlogCategory $category)
    {
        $category->delete();
        return redirect()->back();
    }

    public function categoryUpdate(BlogCategory $category,Request $request)
    {
        $category->name = $request->name;
        $category->save();
        return redirect()->back();
    }

    public function tagCreate(Request $request)
    {
        $generator = new SlugGenerator;
        BlogTag::create([
            'name'=>strtoupper($request->name),
            'slug'=> $generator->generate($request->name) ,
        ]);
        return redirect()->back();
    }

    public function tagDelete(BlogTag $tag)
    {
        $tag->delete();
        return redirect()->back();
    }

    public function tagUpdate(BlogTag $tag,Request $request)
    {   
        $generator = new SlugGenerator;
        if($request->name)$tag->name = strtoupper($request->name);
        $tag->slug = $generator->generate($request->name);
        $tag->save();
        return redirect()->back();
    }

    public function tagsList()
    {   
        $user = Auth::user();
        $blog_tag = BlogTag::paginate(15);
        $site = SiteSettings::first();
        $collections = Collection::all();
        return view('pages.admin_blog_tags',['user'=>$user,'site'=>$site,'tags'=>$blog_tag,'collections'=>$collections]);
    }

    public function Tagged($slug)
    {
        $tag = BlogTag::where('slug','=',$slug)->first();
        $id = $tag->id;        
        $user = Auth::user();
        $blog_category = BlogCategory::all();
        $categories = Category::all();
        $collections = Collection::all();
        $tags = BlogTag::all();
        $articles = Article::whereHas('tags', function($q) use ($id) {
            $q->where('blog_tag_id', $id);
         })->where('published',1);
         if(isset($_GET['category'])){
            $category = BlogCategory::where('name','=',$_GET['category'])->first();
            if($category){
            $id= $category->id;
            $articles=$articles->whereHas('category', function($q) use ($id) {
              $q->where('blog_category_id', $id);
           });
         }
        }
        $articles = $articles->paginate(20);
        $date = strtotime("-3 days");
        $startdate = date('Y-m-d',$date);
        $recents_articles =  Article::whereDate('created_at', '>=', $startdate)->where('published','=','1')->orderby('created_at','desc')->get();
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
        }
        $site = SiteSettings::first();
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
        return view('pages.blogs',['user'=>$user,'tag'=>$tag,'site'=>$site,'articles'=>$articles,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'category'=>$blog_category,'categories'=>$categories,'cart'=>$cart,'recent_articles'=>$recents_articles,'tags'=>$tags,'collections'=>$collections]);
    }

    public function blogImage(Request $request)
    {
        $site = SiteSettings::first();
        if($request->file('image')){
            $image=$request->file('image');
            $imageName=$image->getClientOriginalName();
            $image->move('img',$imageName);
            $site->blog_image=$imageName;
            $site->save();
        }
        return redirect()->back();
    }
}
