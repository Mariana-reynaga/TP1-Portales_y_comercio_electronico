<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function logInForm(){
        return view('auth.loginForm');
    }

    public function loginProcess(Request $req){
        $credentials = $req->only(['email', 'password']);

        // si la auth no valida el usuario, devuelve a la pág de login
        if (!auth()->attempt($credentials)) {
            return redirect()
                   ->back(fallback: route('login'))
            ->withInput();
            // esto poner cuando ponga lo de mensaje de error en la plantilla
            // ->with('nombre', 'mensaje');
        }else{
            // si todo sale bien que me lleve a la pagina de inicio de admin
            return redirect()->route('admin.home');
        }

    }

    public function logoutProcess(Request $req){
        auth()->logout();

        $req ->session()->invalidate();
        $req ->session()->regenerateToken();

        return redirect()->route('home');
    }
}
