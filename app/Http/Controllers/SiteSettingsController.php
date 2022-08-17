<?php

namespace App\Http\Controllers;

use App\ShippingDetail;
use App\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SiteSettingsController extends Controller
{
    public function update(Request $request){
        $site = SiteSettings::first();
        if($request->company_name){
            $site->company_name=$request->company_name;
        } else $site->company_name= NULL;
        if($request->phone){
            $site->phone=$request->phone;
        } else $site->phone= NULL;
        if($request->email){
            $site->email=$request->email;
        } else $site->email= NULL;
        if($request->address){
            $site->address=$request->address;
        } else $site->address= NULL;
        if($request->yandex_map){
            $site->yandex_map=$request->yandex_map;
        } else $site->yandex_map= NULL;
        if($request->instagram){
            $site->instagram=$request->instagram;
        } else $site->instagram= NULL;
        if($request->twitter){
            $site->twitter=$request->twitter;
        } else $site->twitter= NULL;
        if($request->youtube){
            $site->youtube=$request->youtube;
        }else $site->youtube= NULL;
        if($request->facebook){
            $site->facebook=$request->facebook;
        }else $site->facebook= NULL;
        if($request->file('logo1')){
            $logo = $request->file('logo1');
            if($logo)
                if($logo->getSize()){
                    $logoName = $logo->getClientOriginalName();
                    $logo->move('img',$logoName);
                    $site->short_logo = $logoName;
                }else return redirect()->back()->with('errorMessage',"Maximum file size to upload is 2MB (2048 KB). If you are uploading a photo, try to reduce its resolution to make it under 2MB");
        }
        if($request->file('logo2')){
            $logo = $request->file('logo2');
            if($logo)
                if($logo->getSize()){
                    $logoName = $logo->getClientOriginalName();
                    $logo->move('img',$logoName);
                    $site->full_logo = $logoName;
                }else return redirect()->back()->with('errorMessage',"Maximum file size to upload is 2MB (2048 KB). If you are uploading a photo, try to reduce its resolution to make it under 2MB");
        }
        $site->save();
        return redirect()->back();
    }

    public function showform()
    {
        if(!SiteSettings::first()){
            DB::table('site_settings')->insert([
                [
                   'company_name' => ' Name',
                   'short_logo' => 'faviicon_32x32.jpg',
                   'full_logo' => 'logo.png',
                 ]
               ]);
        }
        $site = SiteSettings::first();
        $user = Auth::user();
        return view('pages.site_settings',['site'=>$site,'user'=>$user]);
    }

    public function shippingDetails(){
        $site = SiteSettings::first();
        $user = Auth::user();
        $details = ShippingDetail::all();
        if($details->count()==0){
            DB::table('shipping_details')->insert([
                [
                    'icon'=>'fas fa-plane-departure',
                    'title'=>'Free Worldwide Shipping',
                    'subtitle'=>'On all orders over $75.00',
                    'description'=>'Free Worldwide Shipping'
                ],
                [
                    'icon'=>'far fa-credit-card',
                    'title'=>'100% Payment Secure',
                    'subtitle'=>'We ensure secure payment with PEV',
                    'description'=>'100% Payment Secure'

                ],
                [
                    'icon'=>'fas fa-share-square',
                    'title'=>'30 Days Return',
                    'subtitle'=>'Return it within 20 day for an exchange',
                    'description'=>'30 Days Return'

                ]
            ]);
            $details = ShippingDetail::all();
        }
        return view('pages.shipping-details',['site'=>$site,'details'=>$details,'user'=>$user]);
    }

    public function shippingDetailsEdit(Request $request,ShippingDetail $ShippingDetail){
        $ShippingDetail->icon = $request->icon;
        $ShippingDetail->title = $request->title;
        $ShippingDetail->subtitle = $request->subtitle;
        $ShippingDetail->description = $request->description;
        $ShippingDetail->save();
        return redirect()->back();
    }
}
