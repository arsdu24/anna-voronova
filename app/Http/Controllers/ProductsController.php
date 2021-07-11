<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{   
    public function createProduct(Request $request){
        $formInput= $request->except('thumbnail');
        $image=$request->file('thumbnail');
        if($image){
            $imageName =  $image->getClientOriginalName();
            $image->move('img',$imageName);
            $formInput['thumbnail'] = $imageName;
            $product = Product::create($formInput);
            $id = $product->id;
            return redirect()->route('productPage',['id'=> $id]);
        }
        return redirect()->back();
    }
     
    public function productPage($id){
          $product = Product::find($id);
          return view('pages.product_page',['user'=>Auth::user(),'product'=>$product]);  
    }
   
     public function viewList()
    {   
        $products=Product::all()->reverse();
        return view('pages.products_list',['user'=>Auth::user(),'products'=>$products]);  
    }

    public function clientViewAll()
    {
        $products=Product::all()->reverse();
        return view('pages.client_products_list',['user'=>Auth::user(),'products'=>$products]);  
    }
}
