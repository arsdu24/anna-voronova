<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{    
    public function index()
    {   $orders=Auth::user()->orders->reverse();
        return view('pages.client',['orders'=>$orders, 'user'=>Auth::user()]);
    }
}
