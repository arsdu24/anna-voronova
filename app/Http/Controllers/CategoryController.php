<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SiteSettings;

class CategoryController extends Controller
{
    public function createCategory(Request $request){
        $formInput= $request->except('thumbnail');
        $image=$request->file('thumbnail');
        if($image){
            $imageName =  $image->getClientOriginalName();
            $image->move('img',$imageName);
            $formInput['thumbnail'] = $imageName;
            $category = Category::create($formInput);
            return redirect()->route('categoryPage',['category'=> $category]);
        }
        return redirect()->back();
    }

    public function updateCategory(Category $category,Request $request){
        if($request->title) $category->title=$request->title;
        if($request->description)$category->description = $request->description;
        $image=$request->file('thumbnail');
        if($image){
            $imageName =  $image->getClientOriginalName();
            $image->move('img',$imageName);
            $category->thumbnail = $imageName;
        }
        $category->save();
        return redirect()->route('categoryPage',['category'=> $category]);
    }

    public function deleteCategory(Category $category){
        $category->delete();
        return redirect()->route('categoriesList');
    }

    public function categoryPage(Category $category){
        $site = SiteSettings::first();
        return view('pages.category_page',['user'=>Auth::user(),'category'=>$category,'site'=>$site]);  
    }
     
     public function viewList()
    {   
        $categories=Category::orderby('id', 'desc')->paginate(15);
        $site = SiteSettings::first();
        return view('pages.categories_list',['user'=>Auth::user(),'categories'=>$categories,'site'=>$site]);  
    }

    public function clientViewAll()
    {
        $user=Auth::user();
        $categories=Category::orderby('id', 'desc')->paginate(15);
        $cart=null;
        foreach($user->orders as $order){
            if($order->status == "Draft"){
                $cart=$order;break;
            }
        }
        $site = SiteSettings::first();
        return view('pages.client_categories_list',['user'=>Auth::user(),'categories'=>$categories,'cart'=>$cart,'site'=>$site]);  
    }

    public function categoryShow(Category $category)
    {   $user=Auth::user();
        $id = $category->id;
        $products = Product::whereHas('categories', function($q) use ($id) {
            $q->where('category_id', $id);
         })->where('published',1)->paginate(15);
        $categories = Category::all();
        $cart= null;
        foreach($user->orders as $order){
            if($order->status == "Draft"){
                $cart=$order;break;
            }
        }
        $site = SiteSettings::first();
        return view('pages.client_products_list',['user'=>Auth::user(),'products'=>$products,'categories'=>$categories,'category'=>$category,'site'=>$site,'cart'=>$cart]);  
    }
}
