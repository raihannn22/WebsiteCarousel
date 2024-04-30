<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('tampilan.login');
    }

    public function login (Request $request)
    {
       $credentials = $request->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }

        return back()->with('loginError', 'Login failed');

    }
}
