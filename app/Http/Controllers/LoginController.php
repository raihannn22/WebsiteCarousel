<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Carousel;
use App\Models\Detail;
use App\Models\Fitur;

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

    public function logout (Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect ('index');

    }

    public function dashboard(){
        $jumlahcarousels = Carousel::all()->count();
        $jumlahdetails = Detail::all()->count();
        $jumlahfiturs = Fitur::all()->count();

        return view('admin.dashboard', compact([
           'jumlahcarousels',
           'jumlahdetails',
           'jumlahfiturs',
           ]
        ));
    }
}
