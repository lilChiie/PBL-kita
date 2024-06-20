<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home user
    public function home()
    {
        return view('user.user_home')->with('success', 'Login berhasil');
    }

    //home admin
    public function adminhome()
    {
        return view('admin.adm_home')->with('success', 'Login berhasil');
    }

    //home guest
    public function dashboard()
    {
        return view('home');
    }
}
