<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentReport;
use App\Models\StudentUn;
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
            'students' => Student::where('nisn', 'like', request('search'))->orWhere('nama', 'like', '%'.request('search').'%')->get()
        ]);
    }

    public function siswa()
    {
        return view('siswa', [
            'title' => 'Siswa',
            'students' => Student::paginate(25)
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About'
        ]);
    }

    public function siswaDetail(Student $student)
    {
        return view('detail', [
            'title' => 'Detail Siswa',
            'student' => $student,
            'reports' => $student->reports()->get(),
            'un' => $student->un
        ]);
    }

    public function siswaRaport(StudentReport $report)
    {
        return view('report', [
            'title' => 'Raport Siswa',
            'student' => $report->student,
            'report' => $report
        ]);
    }

    public function siswaUn(StudentUn $un)
    {
        return view('un', [
            'title' => 'UN Siswa',
            'student' => $un->student,
            'un' => $un
        ]);
    }
}