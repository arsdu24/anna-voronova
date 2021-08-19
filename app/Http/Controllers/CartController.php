<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{  
    public function addToCart(Request $request){
        $prod_id = $request->input('product');
        $quantity = $request->input('quantity');

        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        }
        else
        {
            $cart_data = array();
        }

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    $cart_data[$keys]["item_quantity"] += $request->input('quantity');
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return redirect()->back()->with('succes-mesage','Added to cart!');
                }
            }
        }
        else
        {
            $product = Product::find($prod_id);
            $prod_name = $product->name;
            $prod_image = unserialize($product->thumbnail)[0];
            if(!$product->sale_price)$priceval = $product->price;
            else $priceval = $product->sale_price;
            if($product)
            {
                $item_array = array(
                    'item_id' => $prod_id,
                    'item_name' => $prod_name,
                    'item_quantity' => $quantity,
                    'item_price' => $priceval,
                    'item_image' => $prod_image
                );
                $cart_data[] = $item_array;

                $item_data = json_encode($cart_data);
                $minutes = 6000;
                Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                return redirect()->back()->with('succes-mesage','Added to cart!');
            }
        }
        
    }   

    public function CartLoad()
    {
        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $totalcart = count($cart_data);

            echo json_encode(array('totalcart' => $totalcart)); die;
            return;
        }
        else
        {
            $totalcart = "0";
            echo json_encode(array('totalcart' => $totalcart)); die;
            return;
        }
    }

    public function ItemDelete(Request $request){
        $prod_id = $request->input('product');

        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    unset($cart_data[$keys]);
                    $item_data = json_encode($cart_data);
                    $minutes = 6000;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return redirect()->back();
                }
            }
        }
    }

    public function clearcart()
    {
        Cookie::queue(Cookie::forget('shopping_cart'));
        return response()->json(['status'=>'Your Cart is Cleared']);
    }

    public function qtyUpdate(Request $request){
        
        $prod_id = $request->input('product');
        $quantity = $request->input('quantity');

        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);

            $item_id_list = array_column($cart_data, 'item_id');
            $prod_id_is_there = $prod_id;

            if(in_array($prod_id_is_there, $item_id_list))
            {
                foreach($cart_data as $keys => $values)
                { 
                  if($quantity!=0){
                    if($cart_data[$keys]["item_id"] == $prod_id)
                    {
                        $cart_data[$keys]["item_quantity"] =  $quantity;
                        $item_data = json_encode($cart_data);
                        $minutes = 6000;
                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                        return redirect()->back();
                    }
                  }else{
                    foreach($cart_data as $keys => $values)
                    {
                        if($cart_data[$keys]["item_id"] == $prod_id)
                        {
                            unset($cart_data[$keys]);
                            $item_data = json_encode($cart_data);
                            $minutes = 6000;
                            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                            return redirect()->back();
                        }
                    }
                  }
                }
            }
        }
    }
}
