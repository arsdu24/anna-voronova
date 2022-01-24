<?php

namespace App\Http\Controllers;

use App\Article;
use App\Mail\Newsletter;
use App\SiteSettings;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
            Mail::to($subscriber->email)->send(new Newsletter($article));
        }
        if($article->newscount)
            $article->increment('newscount');
        else $article->newscount=1;
        $article->save();
        return redirect()->back()->with('success','Mail sent!');
    }
}
