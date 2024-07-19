<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home($nama)
    {
        $nama = $nama . ' (nama belakang)';
        return view('home', compact('nama'));
    }

    public function login(Request $request)
    {
        dd($request->all());
    }
}
