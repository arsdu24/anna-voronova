<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function createProduct(Request $request){
        $formInput= $request->except('image');
        $image=$request->file('image');
        if($image){
            $imageName =  $image->getClientOriginalName();
            $image->move('img',$imageName);
            $formInput['image'] = $imageName;
            Product::create($formInput);
            return redirect()->route('productList');
        }
    }
     
   
     public function viewList()
    {   
        $products=Product::all();
        return view('pages.products_list',['user'=>Auth::user(),'products'=>$products]);  
    }
}
