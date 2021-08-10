<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            $id = $category->id;
            return redirect()->route('categoryPage',['id'=> $id]);
        }
        return redirect()->back();
    }

    public function updateCategory($id,Request $request){
        $category = Category::find($id);
        if($request->title) $category->title=$request->title;
        if($request->description)$category->description = $request->description;
        $image=$request->file('thumbnail');
        if($image){
            $imageName =  $image->getClientOriginalName();
            $image->move('img',$imageName);
            $category->thumbnail = $imageName;
        }
        $category->save();
        return redirect()->route('categoryPage',['id'=> $id]);
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categoriesList');
    }

    public function categoryPage($id){
        $category = Category::find($id);
        return view('pages.category_page',['user'=>Auth::user(),'category'=>$category]);  
    }
     
     public function viewList()
    {   
        $categories=Category::orderby('id', 'desc')->paginate(15);
        return view('pages.categories_list',['user'=>Auth::user(),'categories'=>$categories]);  
    }

    public function clientViewAll()
    {
        $categories=Category::orderby('id', 'desc')->paginate(15);
        return view('pages.client_categories_list',['user'=>Auth::user(),'categories'=>$categories]);  
    }

    public function categoryShow($id)
    {
        $category = Category::find($id);
        $products = Product::whereHas('categories', function($q) use ($id) {
            $q->where('category_id', $id);
         })->where('published',1)->paginate(15);
        $categories = Category::all();
        return view('pages.client_products_list',['user'=>Auth::user(),'products'=>$products,'categories'=>$categories,'category'=>$category]);  
    }
}
