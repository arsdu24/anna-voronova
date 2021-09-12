<?php

namespace App\Http\Controllers;

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
            $logoName = $logo->getClientOriginalName();
            $logo->move('img',$logoName);
            $site->short_logo = $logoName;

        }
        if($request->file('logo2')){
            $logo = $request->file('logo2');
            $logoName = $logo->getClientOriginalName();
            $logo->move('img',$logoName);
            $site->full_logo = $logoName;
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
}
