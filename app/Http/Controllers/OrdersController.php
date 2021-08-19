<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\Category;
use Illuminate\Http\Request;
use App\Order;
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
       'serial_number' => 'ORD-'.$now,
       'user_id'=> $id,
       'address' => $request['address'],
       'status' => 'Active',
       'subtotal' => $user->cart->totalPrice,
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

    public function viewList(Request $request)
    {
     $orders = Order::orderby('created_at','desc')->paginate(15);
     return view('pages.orders_list',['user'=>Auth::user(),'orders'=>$orders]);
    }

    public function orderPage(Order $order){
      $categories =Category::all();
      return view('pages.order_page',['user'=>Auth::user(),'order'=>$order,'categories'=>$categories]);  
    }

    public function deleteOrder(Request $request){
      $order=Order::find($request->id);
      $order->delete();
      return redirect()->route('ordersList');
    }

    public function updateOrderStatus(Request $request){
      $order=Order::find($request->id);
      $order->status = $request->status;
      $order->save();
      return redirect()->back();
    }
}
