<?php

namespace App\Http\Controllers;

use App\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {   $user = Auth::user();
        $site = SiteSettings::first();
        return view('pages.admin',['user'=>$user,'site'=>$site]);
    }
}
