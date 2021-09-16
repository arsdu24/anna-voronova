<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Review;
use App\Collection;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SiteSettings;

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
        if($request->collections){
         $product->collections()->sync($request->collections);
        }
        else $product->collections()->detach();
        if($request->name) $product->name=$request->name;
        if($request->excerpt)$product->excerpt = $request->excerpt;
        if($request->content)$product->content = $request->content;
        if($request->price)$product->price = $request->price;
        $product->sale_price = $request->sale_price;
        if($request->stock) $product->stock = $request->stock;
        else $product->stock = 0;
        if($request->published)$product->published = 1;
        else $product->published = 0;
        if($request->categories){
          $product->categories()->sync($request->categories);
        }
        else $product->categories()->detach();
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
              array_splice($images, $key, 1);
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
        $collections = Collection::all();
        $product_categories = array();
        foreach($product->categories as $category){
          array_push($product_categories, $category->id);
          }
        $product_coll = array();
        foreach($product->collections as $collection){
          array_push($product_coll, $collection->id);
        }
        $reviews = $product->reviews->reverse();
        $user=Auth::user();
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
        }
        $site = SiteSettings::first();
        return view('pages.product_page',['user'=>Auth::user(),'site'=>$site,'product'=>$product,'reviews'=>$reviews,'categories'=>$categories,'product_coll'=>$product_coll,'cart'=>$cart,'product_categories'=>$product_categories,'categories'=>$categories,'collections'=>$collections]);  

    }
     
     public function viewList()
    {    $user=Auth::user();
        $products=Product::orderby('id', 'desc')->paginate(15);
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
      } 
      $site = SiteSettings::first();
        return view('pages.products_list',['user'=>Auth::user(),'site'=>$site,'products'=>$products,'cart'=>$cart]);  
    }

    public function clientViewAll()
    {    
        $user=Auth::user();
        if(!isset($_GET['sort_by']) || $_GET['sort_by']== 'default')
        $products=Product::where('published',1)->orderby('id', 'desc');
        else if($_GET['sort_by']== 'title-ascending')
          $products=Product::where('published',1)->orderby('name', 'asc');
        else if($_GET['sort_by']== 'title-descending')
          $products=Product::where('published',1)->orderby('name', 'desc');
        else if($_GET['sort_by']== 'price-ascending')
          $products=Product::where('published',1)->orderby('price', 'asc');
        else if($_GET['sort_by']== 'price-descending')
          $products=Product::where('published',1)->orderby('price', 'desc');
        else if($_GET['sort_by']== 'created-descending')
          $products=Product::where('published',1)->orderby('created_at', 'desc');
        else if($_GET['sort_by']== 'created-ascending')
          $products=Product::where('published',1)->orderby('created_at', 'asc');
        else if($_GET['sort_by']== 'manual')
          $products=Product::where('published',1)->orderby('updated_at', 'asc');
        else if($_GET['sort_by']== 'best-selling')
          $products=Product::where('published',1)->orderby('updated_at', 'asc');
        $category = null;
        if(isset($_GET['category'])){
          $category = Category::where('name','=',$_GET['category'])->first();
          $id= $category->id;
          $category = $_GET['category'];
          $products=$products->whereHas('categories', function($q) use ($id) {
            $q->where('category_id', $id);
         })->paginate(15);
        } else
          $products= $products->paginate(15);
        $collection = Collection::all();
        $categories = Category::all();
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
      }

      $site = SiteSettings::first();
      return view('pages.client_products_list',['user'=>Auth::user(),'site'=>$site,'products'=>$products,'categories'=>$categories,'cart'=>$cart,'collections'=>$collection,'category'=>$category]);  
    }

    public function clientProductPage($id)
    {
      $user=Auth::user();
      $categories =Category::all();
      $collections = Collection::all();
      $product=Product::find($id);
      if($product && $product->published){
        $reviews = $product->reviews->where('published',1)->reverse();
        $stars =0;
        foreach($reviews as $review){
          $stars+=$review->stars;
        }
        if($stars)$rating=$stars/$reviews->count();
        else $rating=0;
        $cart = null;
        foreach($user->orders as $order){
          if($order->status == "Draft"){
              $cart=$order;break;
          }
        }
        $MightLike = Product::where('id','<>',$product->id)->inRandomOrder()->take(10)->get();
        $product->views ++;
        $product->save();
        $site = SiteSettings::first();
        return view('pages.client_product_page',['user'=>Auth::user(),'site'=>$site,'product'=>$product,'categories'=>$categories,'reviews'=>$reviews, 'rating'=>$rating,'cart'=>$cart,'myl'=>$MightLike,'collections'=>$collections]);
      }else return redirect()->route('home');
    }

  public function createCategory (Request $request){
    if($request->excerpt)$excerpt =$request->excerpt;
    else $excerpt =null;
      $category=Category::create([
        'name'=>$request->name,
        'excerpt'=>$excerpt,
      ]);
      return redirect()->back();
  }

  public function updateCategory (Category $category,Request $request){
      if($request->name)$category->name = $request->name;
      if($request->excerpt)$category->excerpt = $request->excerpt;
      $category->save();
      return redirect()->back();
  }

  public function deleteCategory (Category $category){
      $category->delete();
      return redirect()->back();
  }

  public function categoriesList()
    {   
        $user = Auth::user();
        $site = SiteSettings::first();
        $category = Category::paginate(15);
        return view('pages.admin_categories',['user'=>$user,'categories'=>$category,'site'=>$site]);
    }
  
}
