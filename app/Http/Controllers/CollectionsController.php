<?php

namespace App\Http\Controllers;

use App\Category;
use App\Collection;
use App\Http\Traits\ProductTrait;
use App\Product;
use App\SiteSettings;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Collection as SupportCollection;
use Illuminate\Support\Facades\Auth;
use PhpParser\ErrorHandler\Collecting;

class CollectionsController extends Controller
{
    use ProductTrait;
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
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->get();
        $modal_collections = Collection::where('in_menu',0)->orWhere('in_menu',NULL)->paginate(15);
        return view('pages.collections_list',['user'=>Auth::user(),'collections'=>$collections,'menu_collections'=>$menu_collections,'modal_collections'=>$modal_collections,'site'=>$site]);
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
        $categories = Category::all();
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
        return view('pages.client_collections_list',['user'=>Auth::user(),'collections'=>$collections,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'categories'=>$categories,'cart'=>$cart,'site'=>$site]);
    }

    public function collectionShow(Collection $collection)
    {   $user=Auth::user();
        $id = $collection->id;
        $products = $this->sort($id);
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
        $menu_products = Product::where('in_menu',1)->orderby('views','desc')->take(4)->get();
        $menu_categories = Category::where('in_menu',1)->orderby('id','desc')->take(5)->get();
        $menu_collections = Collection::where('in_menu',1)->orderby('id','desc')->take(2)->get();
        $bestSellerProducts = Product::where('published',1)->withCount(['cartItems' => function ($query) {
          $query->whereHas('order', function ($query2) {
            $query2->where('status','!=','Draft');
          });
        }])->orderby("cart_items_count",'desc')->take(4)->get();
        return view('pages.client_products_list',['user'=>Auth::user(),'bestSeller'=> $bestSellerProducts,'products'=>$products,'menu_products'=>$menu_products,'menu_categories'=>$menu_categories,'menu_collections'=>$menu_collections,'collections'=>$collections,'categories'=>$categories,'category'=>$category,'collection'=>$collection,'cart'=>$cart,'site'=>$site]);
    }
    public function InMenu(Request $request)
    {
       $collection = Collection::where('id',$request->data_id)->first();
       $collection->in_menu = 1;
       $collection->save();
       return redirect()->back();
    }
    public function downFromMenu(Request $request)
    {
       $collection = Collection::where('id',$request->data_id)->first();
       $collection->in_menu = 0;
       $collection->save();
       return redirect()->back();
    }

}
