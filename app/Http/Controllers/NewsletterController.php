<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Collection;
use App\Mail\Newsletter;
use App\Product;
use App\SiteSettings;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use phpDocumentor\Reflection\Types\Null_;

class NewsletterController extends Controller
{
    public function subscribe(Request $request){
        $subscribers = Subscriber::all();
        if($request->email)
            foreach($subscribers as $subscriber)
                if($subscriber->email == $request->email)return redirect()->back();
        $request->validate([
            'email' => 'required|email'
        ]);
        $subscriber =Subscriber::create([
            'email'=>$request->email,
        ]);
        return redirect()->back()->with('Subscribed','You are subscribed!');
    }

    public function delete(Subscriber $subscriber){
        $subscriber->delete();
        return back();
    }

    public function SubscribersList(){
        $subscribers = Subscriber::paginate(50);
        $site = SiteSettings::first();
        $user = Auth::user();
        $articles = Article::orderby('created_at','desc')->get();
        return view('pages.subscribers_list',['subscribers'=>$subscribers,'site'=>$site,'user'=>$user,'articles'=>$articles]);
    }

    public function sendNewsLetter(Article $article)
    {   
        $subscribers = Subscriber::all();
        foreach($subscribers as $subscriber){
            $email_token = array(
                'email'=>$subscriber->email
            );
            $playload=JWTFactory::sub('token')->data($email_token)->make();
            $token = JWTAuth::encode($playload);
            Mail::to($subscriber->email)->send(new Newsletter($article,$token));
        }
        if($article->newscount)
            $article->increment('newscount');
        else $article->newscount=1;
        $article->save();
        return redirect()->back()->with('success','Mail sent!');
    }

    public function Unsubscribe($token)
    {   
        $tokenN=JWTAuth::getToken($token);
        $email = JWTAuth::getPayload($tokenN)->toArray()['data']->email;
        if($email){
            $subscriber = Subscriber::where('email',$email);
            $subscriber->delete();
        }
        $cart = null;
        foreach(Auth::user()->orders as $order){
            if($order->status == "Draft"){
                $cart=$order;break;
            }
        }
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
        $site = SiteSettings::first();
        $categories = Category::all();
        $collections = Collection::all();
        return view('pages.unsubscribe',['categories'=>$categories,'collections'=>$collections,'cart'=>$cart,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'site'=>$site]);
    }
  
     public function setingPage(){
        $site = SiteSettings::first();
        $user = Auth::user();
        return view('pages.admin_newsletter',['site' => $site,'user'=>$user,'newsletter'=>unserialize($site->newsletter)]);
     }

     public function updateSection(Request $request){
      $site = SiteSettings::first();
      $user = Auth::user();
      $Newsletter = unserialize($site->newsletter);
      if($request->file('thumbnail')){
         $img = $request->file('thumbnail');
         $fileName = $img->getClientOriginalName();
         $img->move('img',$fileName);
         $Newsletter['thumbnail']=$fileName;
      }
         $Newsletter['title']=$request->title;
         $Newsletter['subtitle']=$request->subtitle;
         $Newsletter['placeholder']=$request->placeholder;
         $Newsletter['buttonText']=$request->buttonText;
         $Newsletter['footer']=$request->footer;
         $site->newsletter = serialize($Newsletter);
         $site->save();
      return redirect()->back();
   }
}
