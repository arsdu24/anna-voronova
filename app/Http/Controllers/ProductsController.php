<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Review;
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
            $thumbnail = [$imageName];
            $formInput['thumbnail'] = serialize($thumbnail);
            $product = Product::create($formInput);
            $id = $product->id;
            return redirect()->route('productPage',['id'=> $id]);
        }
        return redirect()->back();
    }

    public function updateProduct($id,Request $request){
        $product = Product::find($id);
        if($request->category){
         $product->categories()->sync($request->category);
        }
        else $product->categories()->detach();
        if($request->name) $product->name=$request->name;
        if($request->excerpt)$product->excerpt = $request->excerpt;
        if($request->content)$product->content = $request->content;
        if($request->price)$product->price = $request->price;
        $product->sale_price = $request->sale_price;
        if($request->published)$product->published = 1;
        else $product->published = 0;
        if($request->tags)$product->tags=serialize($request->tags);
        else $product->tags=serialize([]);

        $firstImage = $request->file('firstThumbnail');
        if($firstImage){
                $imageName =  $firstImage->getClientOriginalName();
                $firstImage->move('img',$imageName);
                if($product->thumbnail)$thumbnails = unserialize( $product->thumbnail);
                else $thumbnails=[];
                unset($thumbnails[0]);
                $thumbnails[0] = $imageName;
                $product->thumbnail = serialize($thumbnails);
        }


        $images=$request->file('file');
        if($images){
            foreach($images as $image){
                $imageName =  $image->getClientOriginalName();
                $image->move('img',$imageName);
                if($product->thumbnail)$thumbnails = unserialize( $product->thumbnail);
                else $thumbnails=[];
                array_push($thumbnails,$imageName);
                $product->thumbnail = serialize($thumbnails);
            }
        };
        $product->save();
        return redirect()->route('productPage',['id'=> $id]);
    }

    public function deleteImage(Request $request){
        $product = Product::find($request->id);
        $images = unserialize( $product->thumbnail);
        foreach($images as $key => $image){
            if($key == $request->name){
                unset($images[$key]);
            }
        }
        $product->thumbnail = serialize($images);
        $product->save();
        return response()->json(true);
    }
    
    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('productList');
    }

    public function productPage($id){
        $product = Product::find($id);
        $categories =Category::all();
        $product_categories = array();
        foreach($product->categories as $category){
        array_push($product_categories, $category->id);
        }
        $reviews = $product->reviews->reverse();
        return view('pages.product_page',['user'=>Auth::user(),'product'=>$product,'reviews'=>$reviews,'categories'=>$categories,'product_cat'=>$product_categories]);  
    }
     
     public function viewList()
    {   
        $products=Product::orderby('id', 'desc')->paginate(15);
        return view('pages.products_list',['user'=>Auth::user(),'products'=>$products]);  
    }

    public function clientViewAll()
    {    
        if(!isset($_GET['sort_by']) || $_GET['sort_by']== 'default')
        $products=Product::where('published',1)->orderby('id', 'desc')->paginate(15);
        else if($_GET['sort_by']== 'title-ascending')
          $products=Product::where('published',1)->orderby('name', 'asc')->paginate(15);
        else if($_GET['sort_by']== 'title-descending')
          $products=Product::where('published',1)->orderby('name', 'desc')->paginate(15);
        else if($_GET['sort_by']== 'price-ascending')
          $products=Product::where('published',1)->orderby('price', 'asc')->paginate(15);
        else if($_GET['sort_by']== 'price-descending')
          $products=Product::where('published',1)->orderby('price', 'desc')->paginate(15);
        else if($_GET['sort_by']== 'created-descending')
          $products=Product::where('published',1)->orderby('created_at', 'desc')->paginate(15);
        else if($_GET['sort_by']== 'created-ascending')
          $products=Product::where('published',1)->orderby('created_at', 'asc')->paginate(15);
        else if($_GET['sort_by']== 'manual')
          $products=Product::where('published',1)->orderby('updated_at', 'asc')->paginate(15);
        else if($_GET['sort_by']== 'best-selling')
          $products=Product::where('published',1)->orderby('updated_at', 'asc')->paginate(15);
        $categories = Category::all();
        return view('pages.client_products_list',['user'=>Auth::user(),'products'=>$products,'categories'=>$categories]);  
    }

    public function clientProductPage($id)
    {

      $categories =Category::all();
      $product=Product::find($id);
      $reviews = $product->reviews->where('published',1)->reverse();
      $stars =0;
      foreach($reviews as $review){
        $stars+=$review->stars;
      }
      if($stars)$rating=$stars/$reviews->count();
      else $rating=0;
      return view('pages.client_product_page',['user'=>Auth::user(),'product'=>$product,'categories'=>$categories,'reviews'=>$reviews, 'rating'=>$rating]);  
    }
}
