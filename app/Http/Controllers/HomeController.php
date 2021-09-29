<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home'
        ]);
    }

    public function search()
    {
        return view('search', [
            'title' => 'Cari Siswa',
            'student' => Student::where('nisn', 'like', request('search'))->orWhere('nama', 'like', '%'.request('search').'%')->get()
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