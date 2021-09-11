<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home'
        ]);
    }

    public function siswa()
    {
        return view('siswa', [
            'title' => 'Siswa'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About'
        ]);
    }
}
