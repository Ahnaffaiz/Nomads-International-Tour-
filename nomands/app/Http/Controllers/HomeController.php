<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //memanggil view
    public function index(Request $request){
        return view('pages.home');
    }
}
