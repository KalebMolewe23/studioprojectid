<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        $title = "Jasa Pengembangan Maupun Pembuatan Website & Android";

        return view('frontend.home', ['title' => $title]);
    }
}
