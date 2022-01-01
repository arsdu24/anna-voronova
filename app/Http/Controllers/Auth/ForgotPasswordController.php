<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Category;
use App\Collection;
use App\Product;
use App\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function ForgotPassword()
    {
        if(Auth::user()->role==2){
        $user= Auth::user();
        $categories =Category::all();
        $site = SiteSettings::first();
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
        }
         $collections= Collection::all();
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
        return view('auth.passwords.confirm',[  'categories'=>$categories,'site'=>$site,'collections'=>$collections,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'cart'=>$cart]);
        }
        if(Auth::user()->role==1){
            $site = SiteSettings::first();
            $user =Auth::user();
            return view('auth.passwords.Adminconfirm',['user'=>$user,'site'=>$site]);
        }
        return back();
    }

    public function EmailForm()
    {  
        if(Auth::user()->role!=1){
        $user= Auth::user();
        $categories =Category::all();
        $site = SiteSettings::first();
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
        }
         $collections= Collection::all();
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
        return view('auth.passwords.email',[  'categories'=>$categories,'site'=>$site,'collections'=>$collections,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'cart'=>$cart]);
        }
        $site = SiteSettings::first();
        $user =Auth::user();
        return view('auth.passwords.Adminemail',['user'=>$user,'site'=>$site]);
    }

    public function EmailVerify(Request $request)
    {
        $request->validate(['email' => 'required|email']);
    
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }

    public function PasswordResetForm($token)
    {   
        if(Auth::user()->role!=1){
        $user= Auth::user();
        $categories =Category::all();
        $site = SiteSettings::first();
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
        }
         $collections= Collection::all();
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
        return view('auth.passwords.reset', ['token' => $token,'categories'=>$categories,'site'=>$site,'collections'=>$collections,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'cart'=>$cart]);
        }
        $site = SiteSettings::first();
        $user =Auth::user();
        return view('auth.passwords.Adminreset',['user'=>$user,'site'=>$site,'token' => $token]);
    }
    public function PasswordUpdate(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);
    
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
                $user->save();
                event(new PasswordReset($user));
            }
        );
    
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
