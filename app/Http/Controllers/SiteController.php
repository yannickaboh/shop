<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Methode : Home pour acceder a mon site
    public function home(Request $request){
        $app_name = 'Shop 241';

        return view('site.home', compact('app_name'));
    }
}
