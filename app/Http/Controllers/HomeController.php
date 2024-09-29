<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('index');
    }

    public function adminHome(){
        return view('admin_index');
    }

}
