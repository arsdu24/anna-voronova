<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function showForm(){
      $user=Auth::user();
      $categories = Category::all();
      return view('pages.order',['categories'=>$categories,'user'=>$user]);
    }

    public function createOrder(Request $request)
    {
     $user=Auth::user();
     $id= Auth::id();
     $now=str_replace('.', '', microtime(true));
     $order=$user->orders()->create([
       'serial_number' => 'ORD-'.$now,
       'user_id'=> $id,
       'address' => $request['address'],
       'status' => 'Active',
       'subtotal' => $user->cart->totalPrice,
     ]);
     foreach($user->cart->items as $item){
       $item->cart()->dissociate();
       $item->order()->associate($order);
       $item->save();
     }
     $order->save();
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
