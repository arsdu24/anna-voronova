<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SiteSettings;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function create(Request $request){
        $is_slide = 0;
        if($request->is_slide){
            $is_slide = 1;
        }
        $highlighted =null;
        if($request->highlighted) $highlighted = $request->highlighted;
        $banner=Banner::create([
            'title'=> $request->title,
            'excerpt'=>$request->excerpt,
            'is_slide'=> $is_slide,
            'highlighted' => $highlighted,
        ]);
        if($request->file('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = $image->getClientOriginalName();
            $image->move('img',$imageName);
            $banner->thumbnail = $imageName;
         }
         $banner->save();
         return redirect()->back();
    }

    public function bannerUpdate(Request $request,Banner $banner){
       $banner->title = $request->title;
       $banner->excerpt = $request->excerpt;
       if($request->highlighted)
       $banner->highlighted = $request->highlighted;
       else  $banner->highlighted = null;
        if($request->is_slide)$banner->is_slide = 1;
        else $banner->is_slide = 0;
       if($request->file('thumbnail')){
            $image = $request->file('thumbnail');
            $imageName = $image->getClientOriginalName();
            $image->move('img',$imageName);
            $banner->thumbnail = $imageName;
       }
       $banner->save();
       return redirect()->back();
    }

    public function bannerDelete(Banner $banner){
        $banner->delete();
        return redirect()->back();
     }

    public function slidersList(){
        $user = Auth::user();
        if(Banner::where('is_slide','=',1)->count()<1){
            DB::table('banners')->insert([
             [
                'title' => 'See our new collection',
                'thumbnail' => 'slide11_1944x.png',
                'excerpt'=>'We brought something ',
                'highlighted' =>'for you ',
                'link' => '/products',
                'is_slide' => 1
              ],
            ]);
            }
        $sliders = Banner::where('is_slide','=',1)->paginate('10');
        $site = SiteSettings::first();
        return view('pages.sliders-list',['user'=>$user,'sliders'=>$sliders,'site'=>$site]);
    }
    public function bannersList(){
         if(Banner::where('is_slide','=',0)->count()<2){
            DB::table('banners')->insert([
             [
                'title' => 'Under Trending Products block',
                'thumbnail' => 'banner4.jpg',
                'link' => '/products',
                'is_slide' => 0
              ],
              [
                'title' => 'Above Blog block',
                'thumbnail' => 'banner3_360x.jpg',
                'link' => '/blogs/news',
                'is_slide' => 0
              ]
            ]);
            }
        $user = Auth::user();
        $banners = Banner::where('is_slide','=',0)->paginate('2');
        $site = SiteSettings::first();
        return view('pages.banners-list',['user'=>$user,'banners'=>$banners,'site'=>$site]);

    }

}
