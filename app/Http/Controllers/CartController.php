<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartItem;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{ 
    public function addToCart(Request $request){
        $user=Auth::user();
        if(!$user->cart){
            $cart = $user->cart()->create([
                'totalPrice' => 0,
            ]);
            $item = $cart->items()->create([
                'cart_id'=>$cart->id,
                'quantity' => $request->quantity,      
                'product_id' => $request->product,  
            ]);
            if(!$item->product->sale_price)$user->cart->totalPrice += $item->product->price *  $item->quantity ;
            else $cart->totalPrice += $item->product->sale_price *  $item->quantity ;
            $cart->save();
        };
        if($user->cart){
            if($user->cart->items){
            foreach($user->cart->items as $cartItem){
               if($cartItem->product->id == $request->product){
                    $cartItem->quantity += $request->quantity;
                    $cartItem->save();
                    if(!$cartItem->product->sale_price)$user->cart->totalPrice += $cartItem->product->price *  $request->quantity;
                    else $user->cart->totalPrice += $cartItem->product->sale_price *  $request->quantity;
                    $user->cart->save();
                    return redirect()->back();
               }
            }
        }
        $item=$user->cart->items()->create([
            'cart_id'=>$user->cart->id,
            'quantity' => $request->quantity,      
            'product_id' => $request->product,  
        ]);
        if(!$item->product->sale_price)$user->cart->totalPrice += $item->product->price *  $item->quantity ;
        else $user->cart->totalPrice += $item->product->sale_price *  $item->quantity ;
        $user->cart->save();
    }
        return redirect()->back();
    }   

    public function ItemDelete(Request $request){
        $user=Auth::user();
        $item=$user->cart->items()->find($request->id);
        if($item){
        if(!$item->product->sale_price) $user->cart->totalPrice -= $item->product->price *  $item->quantity ;
        else $user->cart->totalPrice -= $item->product->sale_price *  $item->quantity ;
        $item->delete();
        $user->cart->save();
        }
        return redirect()->back();
    }

    public function qtyPlus(Request $request){
        $user=Auth::user();
        $item=$user->cart->items()->find($request->id);
        $item->quantity ++;
        $item->save();
        if(!$item->product->sale_price)$user->cart->totalPrice += $item->product->price ;
        else $user->cart->totalPrice += $item->product->sale_price;
        $user->cart->save();
        return redirect()->back();
    }
    public function qtyMinus(Request $request){
        $user=Auth::user();
        $item=$user->cart->items()->find($request->id);
        $item->quantity --;
        $item->save();
        if(!$item->product->sale_price)$user->cart->totalPrice -= $item->product->price ;
        else $user->cart->totalPrice -= $item->product->sale_price ;
        if($item->quantity == 0){
            $item->delete();
        }
        $user->cart->save();
        return redirect()->back();
    }

    public function qtyUpdate(Request $request){
        $user=Auth::user();
        $item=$user->cart->items()->find($request->id);
        if($item){
        if(!$item->product->sale_price) $user->cart->totalPrice -=  $item->quantity * $item->product->price;
        else $user->cart->totalPrice -=  $item->quantity * $item->product->sale_price;
        $item->quantity = $request->quantity;
        if(!$item->product->sale_price)$user->cart->totalPrice += $item->product->price * $item->quantity ;
        else $user->cart->totalPrice += $item->product->sale_price * $item->quantity ;
        $item->save();
        if($item->quantity == 0){
            $item->delete();
        }
        $user->cart->save();
        }
        return redirect()->back();
    }
}
