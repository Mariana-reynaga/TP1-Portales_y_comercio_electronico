<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function logInForm(){
        return view('auth.loginForm');
    }
}
