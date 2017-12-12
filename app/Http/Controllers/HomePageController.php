<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home(){
        return view('HomePage');
    }
    public function shop(){
        return view('Shop');
    }
    public function homeRedirect(){
        return redirect('/');
    }
    
}
