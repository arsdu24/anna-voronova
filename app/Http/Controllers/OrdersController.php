<?php

namespace App\Http\Controllers;

use App\Category;
use App\Collection;
use Illuminate\Http\Request;
use App\Order;
use App\Collection;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\SiteSettings;

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
      $site = SiteSettings::first();
      $collections= Collection::all();
      $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
      $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
      $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
      return view('pages.checkout-information',['categories'=>$categories,'site'=>$site,'user'=>$user,'cart'=>$cart,'collections'=>$collections]);
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
       if($item->product->stock > 0 && $item->product->stock - $item->quantity >= 0){
          $item->product->decrement('stock',$item->quantity);
          $quantity+=$item->quantity;
         }
         else return redirect()->back();
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
     $site = SiteSettings::first();
     return view('pages.orders_list',['user'=>Auth::user(),'site'=>$site,'orders'=>$orders]);
    }

    public function orderPage(Order $order){
      $categories =Category::all();
      $site = SiteSettings::first();
      $collections = Collection::all();
      return view('pages.order_page',['user'=>Auth::user(),'site'=>$site,'order'=>$order,'categories'=>$categories,'collections'=>$collections]);  
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
      $product = Product::find($request->product);
      if(!$cart){
          $NewCart = $user->orders()->create([
              'subtotal' => 0,
              'status'=> 'Draft'
          ]);
          if($request->quantity > $product->stock){
            $request->quantity =  $product->stock;
          }
          if($request->quantity != 0){
          $item = $NewCart->items()->create([
              'cart_id'=>$NewCart->id,
              'quantity' => $request->quantity,      
              'product_id' => $request->product, 
              'price' => $price, 
          ]);
          $NewCart->subtotal +=$item->price * $request->quantity;
          $NewCart->save();
        }
      };
      if($cart){
          if($cart->items){
          foreach($cart->items as $cartItem){
             if($cartItem->product_id == $request->product ){
               if( $cartItem->quantity + $request->quantity <= $cartItem->product->stock){
                  $cartItem->quantity += $request->quantity;
                  $cartItem->save();
                  $cart->subtotal+=$cartItem->price * $request->quantity;
                  $cart->save();
                }
                  return redirect()->back();
             }
          }
      }
      if($request->quantity > $product->stock){
        $request->quantity =  $product->stock;
      }
      if($request->quantity != 0){
      $item=$cart->items()->create([
          'cart_id'=>$cart->id,
          'quantity' => $request->quantity,      
          'product_id' => $request->product, 
          'price' => $price,  
      ]);
      $cart->subtotal+=$item->price * $request->quantity;
      $cart->save();
    }
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
      if($item &&  $request->quantity<=$item->product->stock){
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
      $site = SiteSettings::first();
      $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
      $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
      $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
      return view('pages.cart-information',['categories'=>$categories,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'site'=>$site,'user'=>$user,'cart'=>$cart,'collections'=>$collections]);
  }
}
