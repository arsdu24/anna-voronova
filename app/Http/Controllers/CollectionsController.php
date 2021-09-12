<?php

namespace App\Http\Controllers;

use App\Category;
use App\collection;
use App\Product;
use App\SiteSettings;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollectionsController extends Controller
{
    public function createcollection(Request $request){
        $formInput= $request->except('thumbnail');
        $image=$request->file('thumbnail');
        if($image){
            $imageName =  $image->getClientOriginalName();
            $image->move('img',$imageName);
            $formInput['thumbnail'] = $imageName;
            $collection = Collection::create($formInput);
            return redirect()->route('collectionPage',['collection'=> $collection]);
        }
        return redirect()->back();
    }

    public function updatecollection(Collection $collection,Request $request){
        if($request->title) $collection->title=$request->title;
        if($request->description)$collection->description = $request->description;
        $image=$request->file('thumbnail');
        if($image){
            $imageName =  $image->getClientOriginalName();
            $image->move('img',$imageName);
            $collection->thumbnail = $imageName;
        }
        $collection->save();
        return redirect()->route('collectionPage',['collection'=> $collection]);
    }

    public function deletecollection(Collection $collection){
        $collection->delete();
        return redirect()->route('collectionsList');
    }

    public function collectionPage(Collection $collection){
        $site = SiteSettings::first();
        return view('pages.collection_page',['user'=>Auth::user(),'collection'=>$collection,'site'=>$site]);  
    }
     
     public function viewList()
    {   
        $site = SiteSettings::first();
        $collections=Collection::orderby('id', 'desc')->paginate(15);
        return view('pages.collections_list',['user'=>Auth::user(),'collections'=>$collections,'site'=>$site]);  
    }

    public function clientViewAll()
    {
        $user=Auth::user();
        $collections=Collection::orderby('id', 'desc')->paginate(15);
        $cart=null;
        foreach($user->orders as $order){
            if($order->status == "Draft"){
                $cart=$order;break;
            }
        }
        $site = SiteSettings::first();
        return view('pages.client_collections_list',['user'=>Auth::user(),'collections'=>$collections,'cart'=>$cart,'site'=>$site]);  
    }
  
    public function collectionShow(Collection $collection)
    {   $user=Auth::user();
        $id = $collection->id;
        $products = Product::whereHas('collections', function($q) use ($id) {
            $q->where('collection_id', $id);
         })->where('published',1);
         if(!isset($_GET['sort_by']) || $_GET['sort_by']== 'default')
        $products=$products->where('published',1)->orderby('id', 'desc');
        else if($_GET['sort_by']== 'title-ascending')
          $products=$products->where('published',1)->orderby('name', 'asc');
        else if($_GET['sort_by']== 'title-descending')
          $products=$products->where('published',1)->orderby('name', 'desc');
        else if($_GET['sort_by']== 'price-ascending')
          $products=$products->where('published',1)->orderby('price', 'asc');
        else if($_GET['sort_by']== 'price-descending')
          $products=$products->where('published',1)->orderby('price', 'desc');
        else if($_GET['sort_by']== 'created-descending')
          $products=$products->where('published',1)->orderby('created_at', 'desc');
        else if($_GET['sort_by']== 'created-ascending')
          $products=$products->where('published',1)->orderby('created_at', 'asc');
        else if($_GET['sort_by']== 'manual')
          $products=$products->where('published',1)->orderby('updated_at', 'asc');
        else if($_GET['sort_by']== 'best-selling')
          $products=$products->where('published',1)->orderby('updated_at', 'asc');
         if(isset($_GET['category'])){
            $category = Category::where('name','=',$_GET['category'])->first();
            $id= $category->id;
            $products=$products->whereHas('categories', function($q) use ($id) {
              $q->where('category_id', $id);
           })->paginate(15);
          } else
            $products= $products->paginate(15);
        $collections = Collection::all();
        if(isset($_GET['category']))$category = $_GET['category'];
        else $category = null;
        $categories = Category::all();
        $cart= null;
        foreach($user->orders as $order){
            if($order->status == "Draft"){
                $cart=$order;break;
            }
        }
        $site = SiteSettings::first();
        return view('pages.client_products_list',['user'=>Auth::user(),'products'=>$products,'collections'=>$collections,'categories'=>$categories,'category'=>$category,'collection'=>$collection,'cart'=>$cart,'site'=>$site]);  
    }
}
