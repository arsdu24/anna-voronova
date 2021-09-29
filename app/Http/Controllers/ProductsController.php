<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Review;
use App\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SiteSettings;
use Mockery\Generator\StringManipulation\Pass\RemoveUnserializeForInternalSerializableClassesPass;

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
            $array = [0=>"Automated"];
            $products = $product;
            foreach( $product->categories() as $category)
                if($category)
                 foreach($category->products() as $item)
                    $products = $products->merge($item);
              foreach( $product->collections() as $collection)
                if($collection)
                 foreach($collection->products() as $item)
                    $products  = $products ->merge($item);
            $products  = $products->where('id','!=',$product->id)->orderby('views','desc');
            $products = $products->take(10)->get();
            foreach($products as $item){
              array_push($array,$item->id);
            }
            $product->mightLike =  serialize($array);
            $product->save();
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
        if($request->in_menu)$product->in_menu = 1;
        else $product->in_menu = 0;
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
      $ml = unserialize($product->mightLike);
      array_splice($ml,0,1);
          if(unserialize($product->mightLike)[0]=="Manual"){
            $products= Product::whereNotIn('id',$ml)->where('id','!=',$product->id)->where('published',1)->orderby('id','desc')->paginate(30);
          }
          else $products = Product::where('id','!=',$product->id)->where('published',1)->orderby('id','desc')->paginate(30);
        $MightLike = Product::where('id','!=',$product->id)->whereIn('id',$ml)->where('published',1)->orderby('id','desc')->paginate(30);
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
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
        return view('pages.product_page',['user'=>Auth::user(),'site'=>$site,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'product'=>$product,'reviews'=>$reviews,'categories'=>$categories,'product_coll'=>$product_coll,'cart'=>$cart,'product_categories'=>$product_categories,'categories'=>$categories,'collections'=>$collections]);  

    }
     
     public function viewList()
    {   
        $user=Auth::user();
        $products=Product::orderby('id', 'desc')->paginate(15);
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->get();
        $modal_products = Product::where('in_menu',0)->orWhere('in_menu',NULL)->paginate(15);
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
        return view('pages.products_list',['user'=>Auth::user(),'site'=>$site,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'products'=>$products,'cart'=>$cart,'menu_products'=>$menu_products,'modal_products'=>$modal_products]);  
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
      $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
      $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
      $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
      return view('pages.client_products_list',['user'=>Auth::user(),'site'=>$site,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'products'=>$products,'categories'=>$categories,'cart'=>$cart,'collections'=>$collection,'category'=>$category]);  
    }

    public function clientProductPage($id)
    {
      $user=Auth::user();
      $categories =Category::all();
      $collections = Collection::all();
      $product=Product::find($id);
      if(unserialize($product->mightLike)[0]=="Automated"){
        $array = [0=>"Automated"];
      $ids = [];
      foreach( $product->categories as $category)
          if($category)
           foreach($category->products as $item)
              array_push($ids,$item->id);
        foreach( $product->collections as $collection)
          if($collection)
           foreach($collection->products as $item)
           array_push($ids,$item->id);
      $products  = Product::where('id','!=',$product->id)->whereIn('id',$ids)->orderby('views','desc');
      $products = $products->take(10)->get();
      foreach($products as $item){
        array_push($array,$item->id);
      }
      $product->mightLike =  serialize($array);
      $product->save();
      }
      if($product && $product->published){
        $user_reviews = $product->reviews->where('user_id',$user->id)->reverse();
        $reviews = $product->reviews->where('published',1)->reverse();
        $reviews = $user_reviews->merge($reviews);
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
        $ml = unserialize($product->mightLike);
        array_splice($ml,0,1);
        $MightLike = Product::where('id','!=',$product->id)->whereIn('id',$ml)->where('published',1)->orderby('id','desc')->paginate(30);
        $product->views ++;
        $product->save();
        $site = SiteSettings::first();
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
        return view('pages.client_product_page',['user'=>Auth::user(),'site'=>$site,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'product'=>$product,'categories'=>$categories,'reviews'=>$reviews, 'rating'=>$rating,'cart'=>$cart,'myl'=>$MightLike,'collections'=>$collections]);
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
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->get();
        $modal_categories = Category::where('in_menu',0)->orWhere('in_menu',NULL)->paginate(15);
        $category = Category::paginate(15);
        return view('pages.admin_categories',['user'=>$user,'categories'=>$category,'site'=>$site,'menu_categories'=>$menu_categories,'modal_categories'=>$modal_categories]);
    }
  public function mightLike(Request $request)
  {
    $product = Product::find($request->id);
    if($request->type == "Automated"){
      $array = [0=>"Automated"];
      $ids = [];
      foreach( $product->categories as $category)
          if($category)
           foreach($category->products as $item)
              array_push($ids,$item->id);
        foreach( $product->collections as $collection)
          if($collection)
           foreach($collection->products as $item)
           array_push($ids,$item->id);
      $products  = Product::where('id','!=',$product->id)->whereIn('id',$ids)->orderby('views','desc');
      $products = $products->take(10)->get();
      foreach($products as $item){
        array_push($array,$item->id);
      }
      $product->mightLike =  serialize($array);
      $product->save();
    }
    else{
      if(unserialize($product->mightLike)[0]=="Automated"){
      $product->mightLike = serialize([0=>"Manual"]);
      $product->save();
      }
    }
    return redirect()->back();
  }
  public function mightLikeAdd(Request $request)
  {
        $product = Product::find($request->id);
        $array = unserialize($product->mightLike);
        array_push($array,$request->data_id);
        $product->mightLike = serialize($array);
        $product->save();
    return redirect()->back();
  }
  public function mightLikeDelete(Request $request)
  {
        $product = Product::find($request->id);
        $array = unserialize($product->mightLike);
          foreach($array as $key => $item)
              if($item == $request->data_id){
                  array_splice($array,$key,1);
              } 
        $product->mightLike = serialize($array);
        $product->save();
    return redirect()->back();
  }
  
  public function InMenu(Request $request)
  {
     $product = Product::where('id',$request->data_id)->first();
     $product->in_menu = 1;
     $product->save();
     return redirect()->back();
  }  
  public function downFromMenu(Request $request)
  {
     $product = Product::where('id',$request->data_id)->first();
     $product->in_menu = 0;
     $product->save();
     return redirect()->back();
  }  
  public function InMenuCategory(Request $request)
  {
     $category = Category::where('id',$request->data_id)->first();
     $category->in_menu = 1;
     $category->save();
     return redirect()->back();
  }  
  public function downFromMenuCategory(Request $request)
  {
     $category = Category::where('id',$request->data_id)->first();
     $category->in_menu = 0;
     $category->save();
     return redirect()->back();
  }      
}
