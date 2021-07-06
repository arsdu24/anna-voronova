<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function showForm(){
      return view('pages.order');
    }

    public function createOrder(Request $request)
    {
     $user=Auth::user();
     $id= Auth::id();
     $order=$user->orders()->create([
       'user_id'=> $id,
       'address' => $request['address'],
       'status' => 'active',
     ]);
     return redirect('/');
    }
}
