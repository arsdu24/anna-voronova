<?php

namespace App\Http\Controllers;

use App\Article;
use App\BlogCategory;
use App\BlogTag;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        $user = Auth::user();
        $blog_category = BlogCategory::all();
        $categories = Category::all();
        $tags = BlogTag::all();
        $articles = Article::orderby('created_at','desc')->where('published','=','1')->paginate(15);
        $date = strtotime("-3 days");
        $startdate = date('Y-m-d',$date);
        $recents_articles =  Article::whereDate('created_at', '>=', $startdate)->where('published','=','1')->orderby('created_at','desc')->get();
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
        }
        return view('pages.blogs',['user'=>$user,'articles'=>$articles,'category'=>$blog_category,'categories'=>$categories,'cart'=>$cart,'recent_articles'=>$recents_articles,'tags'=>$tags]);
    }
    
    public function categoriesList()
    {   
        $user = Auth::user();
        $blog_category = BlogCategory::paginate(15);
        $tags = BlogTag::all();
        return view('pages.admin_blog_cat',['user'=>$user,'categories'=>$blog_category,'tags'=>$tags]);

    }

    public function blogPage(Article $article){
        $user = Auth::user();
        $blog_categories = BlogCategory::all();
        $article_tags = array();
        foreach($article->tags as $tag){
          array_push($article_tags, $tag->id);
        }
        $date = strtotime("-3 days");
        $startdate = date('Y-m-d',$date);
        $recents_articles =  Article::whereDate('created_at', '>=', $startdate)->where('published','=','1')->orderby('created_at','desc')->get();
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
        }

        return view('pages.client_blogPage',['user'=>$user,'article'=>$article,'categories'=>$blog_categories,'cart'=>$cart,'recent_articles'=>$recents_articles,'article_tags'=>$article_tags]);
    }

    public function admin_blogs(){
        $articles = Article::orderby('created_at','desc')->paginate(15);
        $user=Auth::user();
        $blog_category = BlogCategory::all();
        $tags = BlogTag::all();
        return view('pages.blogs_list',['articles'=>$articles,'user'=>$user,'categories'=>$blog_category,'tags'=>$tags]);

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
        return view('pages.admin_article',['user'=>Auth::user(),'article'=>$article,'categories'=>$blog_category,'cat'=>$article_categories,'tags'=>$article_tags,'blog_tags'=>$blog_tags]);

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
     else $product->tags()->detach();

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
        BlogTag::create([
            'name'=>$request->name,
            'slug'=>str_replace(' ', '-', $request->name),
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
        if($request->name)$tag->name = $request->name;
        if($request->slug)$tag->slug = $request->slug;
        $tag->save();
        return redirect()->back();
    }

    public function tagsList()
    {   
        $user = Auth::user();
        $blog_tag = BlogTag::paginate(15);
        return view('pages.admin_blog_tags',['user'=>$user,'tags'=>$blog_tag]);
    }

    public function Tagged($slug)
    {
        $tag = BlogTag::where('slug','=',$slug)->first();
        $id = $tag->id;        
        $user = Auth::user();
        $blog_category = BlogCategory::all();
        $categories = Category::all();
        $tags = BlogTag::all();
        $articles = Article::whereHas('tags', function($q) use ($id) {
            $q->where('blog_tag_id', $id);
         })->where('published',1)->paginate(15);
        $date = strtotime("-3 days");
        $startdate = date('Y-m-d',$date);
        $recents_articles =  Article::whereDate('created_at', '>=', $startdate)->where('published','=','1')->orderby('created_at','desc')->get();
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
        }
        return view('pages.blogs',['user'=>$user,'articles'=>$articles,'category'=>$blog_category,'categories'=>$categories,'cart'=>$cart,'recent_articles'=>$recents_articles,'tags'=>$tags]);
    }

}
