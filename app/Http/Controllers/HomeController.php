<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $userLoggedIn = Auth::user();
        return view('home', compact('userLoggedIn'));
    }

    public function login(Request $request)
    {
        $credential = $request->only('username', 'password');
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'admin') {
                return redirect()->route('home');
            } else {
                return redirect()->route('mahasiswaHome');
            }
        } else {
            dd('login gagal');
        }
        dd($credential);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('loginPage');
    }

    public function mahasiswaHome()
    {
        $userLoggedIn = Auth::user();
        return view('mahasiswa_home', compact('userLoggedIn'));
    }
}
