<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Order;
use App\Product;
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
      $cart = null;
      foreach($user->orders as $order){
      if($order->status == "Draft") {
        $cart = $order;break;
      }
      }
      return view('pages.checkout-information',['categories'=>$categories,'user'=>$user,'cart'=>$cart]);
    }

    public function createOrder(Request $request)
    {
     $user=Auth::user();
     $id= Auth::id();
     $now=str_replace('.', '', microtime(true));
     $cart = null;
     foreach($user->orders as $order){
      if($order->status == "Draft") {
        $cart = $order;break;
      }
     }
     $quantity=0;
     foreach($cart->items as $item){
       $quantity+=$item->quantity;
     }
     $cart->contact = $request->checkout['email_or_phone'];
     $cart->address = serialize($request->checkout['shipping_address']);
     $cart->serial_number='ORD-'.$now;
     $cart->status = "Active";
     $cart->quantity = $quantity;
     $cart->save();
     return redirect()->route('home');
    }

    public function viewList(Request $request)
    {
     $orders = Order::orderby('created_at','desc')->where('status','<>','Draft')->paginate(15);
     return view('pages.orders_list',['user'=>Auth::user(),'orders'=>$orders]);
    }

    public function orderPage(Order $order){
      $categories =Category::all();
      $collections = Collection::all();
      return view('pages.order_page',['user'=>Auth::user(),'order'=>$order,'categories'=>$categories,'collections'=>$collections]);  
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


    public function addToCart(Request $request){
      $user=Auth::user();
      $product = Product::find($request->product);
      if($product->sale_price) $price=$product->sale_price;
      else $price=$product->price;
      $cart = null;
      foreach($user->orders as $order){
        if($order->status == "Draft") {
          $cart = $order;break;
        }
      }

      if(!$cart){
          $NewCart = $user->orders()->create([
              'subtotal' => 0,
              'status'=> 'Draft'
          ]);
          $item = $NewCart->items()->create([
              'cart_id'=>$NewCart->id,
              'quantity' => $request->quantity,      
              'product_id' => $request->product, 
              'price' => $price, 
          ]);
          $NewCart->subtotal +=$item->price * $request->quantity;
          $NewCart->save();
      };
      if($cart){
          if($cart->items){
          foreach($cart->items as $cartItem){
             if($cartItem->product_id == $request->product){
                  $cartItem->quantity += $request->quantity;
                  $cartItem->save();
                  $cart->subtotal+=$cartItem->price * $request->quantity;
                  $cart->save();
                  return redirect()->back();
             }
          }
      }
      $item=$cart->items()->create([
          'cart_id'=>$cart->id,
          'quantity' => $request->quantity,      
          'product_id' => $request->product, 
          'price' => $price,  
      ]);
      $cart->subtotal+=$item->price * $request->quantity;
      $cart->save();
  }
      return redirect()->back();
  }   

  public function ItemDelete(Request $request){
      $user=Auth::user();
      $cart = null;
      foreach($user->orders as $order){
        if($order->status == "Draft") {
          $cart = $order;break;
        }
      }
      if($cart)$item=$cart->items()->find($request->id);
      if($item){
      $cart->subtotal -= $item->price * $item->quantity ;
      $item->delete();
      $cart->save();
      }
      return redirect()->back();
  }

  public function qtyUpdate(Request $request){
    $user=Auth::user();
    $cart = null;
    foreach($user->orders as $order){
      if($order->status == "Draft") {
        $cart = $order;break;
      }
    }
      if($cart)$item=$cart->items()->find($request->id);
      if($item){
      $cart->subtotal -=  $item->quantity * $item->price;
      $item->quantity = $request->quantity;
      $cart->subtotal += $item->price * $item->quantity ;
      $item->save();
      if($item->quantity == 0){
          $item->delete();
      }
      $cart->save();
      }
      return redirect()->back();
  }
  public function index(){
      $user = Auth::user();
      $categories = Category::all();
      $collections = Collection::all();
      $cart = null;
      foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
      }
      return view('pages.cart-information',['categories'=>$categories,'user'=>$user,'cart'=>$cart,'collections'=>$collections]);
  }
}
