<?php

namespace App\Http\Controllers;

use App\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;

class NewsletterController extends Controller
{
     public function setingPage(){
        $site = SiteSettings::first();
        $user = Auth::user();
        return view('pages.admin_newsletter',['site' => $site,'user'=>$user,'newsletter'=>unserialize($site->newsletter)]);
     }

     public function updateSection(Request $request){
      $site = SiteSettings::first();
      $user = Auth::user();
      $Newsletter = unserialize($site->newsletter);
      if($request->file('thumbnail')){
         $img = $request->file('thumbnail');
         $fileName = $img->getClientOriginalName();
         $img->move('img',$fileName);
         $Newsletter['thumbnail']=$fileName;
      }
         $Newsletter['title']=$request->title;
         $Newsletter['subtitle']=$request->subtitle;
         $Newsletter['placeholder']=$request->placeholder;
         $Newsletter['buttonText']=$request->buttonText;
         $Newsletter['footer']=$request->footer;
         $site->newsletter = serialize($Newsletter);
         $site->save();
      return redirect()->back();
   }
}
