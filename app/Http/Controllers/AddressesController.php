<?php

namespace App\Http\Controllers;

use App\Adress;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressesController extends Controller
{
    public function CreateAddress(Request $request)
    {
        $user = Auth::user();
        $user->addresses()->create($request->all());
        $user->save();
        return redirect()->back();
    }

    public function DeleteAddress(Adress $address)
    {
        $address->delete();
        return redirect()->back();
    }

    public function SetAddress(Request $request)
    {   
        $address= Adress::find($request->address);
        $user = Auth::user();
        $addresses = [];
        $cart = NULL;
        foreach($user->orders as $order){
            if($order->status == "Draft") {
              $cart = $order;break;
            }
        }
        $addresses['first_name'] = $address->first_name;
        $addresses['last_name'] = $address->last_name;
        $addresses['address1'] = $address->address1;
        $addresses['address2'] = $address->address2;
        $addresses['city'] = $address->city;
        $addresses['country'] = $address->country;
        $addresses['province'] = $address->province;
        $addresses['zip'] = $address->zip;
        $cart->address = serialize($addresses);
        $cart->save();
        return redirect()->back();
    }
}
