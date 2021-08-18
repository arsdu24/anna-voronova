<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\Category;
use Illuminate\Http\Request;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function showForm(){
      $user=Auth::user();
      $categories = Category::all();
      $cookie_data = stripslashes(Cookie::get('shopping_cart'));
      $cart_data = json_decode($cookie_data, true);

      return view('pages.checkout-information',['categories'=>$categories,'user'=>$user]);
    }

    public function createOrder(Request $request)
    {
     $user=Auth::user();
     $id= Auth::id();
     $now=str_replace('.', '', microtime(true));
     $cookie_data = stripslashes(Cookie::get('shopping_cart'));
     $cart_data = json_decode($cookie_data, true);
     $order=$user->orders()->create([
       'user_id'=> $id,
       'address' => $request['address'],
       'status' => 'active',
     ]);
     foreach($cart_data as $data){
       $item = CartItem::create([
        'quantity'=>$data['item_quantity'],
        'price' =>$data['item_price'],
        'product_id'=>$data['item_id'],
       ]);
       $item->order()->associate($order);
     }
     $order->save();
     if(isset($_COOKIE['shopping_cart'])) {
        unset($_COOKIE['shopping_cart']); 
     };
     return redirect()->route('home');
    }
}
