<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{    
    public function index()
    {   $orders=Auth::user()->orders->reverse();
        $categories = Category::all();
        return view('pages.client',['orders'=>$orders, 'user'=>Auth::user(),'categories'=>$categories]);
    }
}
