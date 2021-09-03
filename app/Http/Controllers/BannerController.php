<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function slidersList(Request $request){
        $user = Auth::user();
        $sliders = Banner::where('is_slide','=',1)->paginate('15');
        return view('pages.banners-list',['user'=>$user,'sliders'=>$sliders]);
    }
   
}
