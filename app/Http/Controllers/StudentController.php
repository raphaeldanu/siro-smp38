<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentReport;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.students.index', [
            'title' => 'Students',
            'students' => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.students.create', [
            'title' => 'Input Siswa',
            'judul' => 'Tambah Siswa'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nisn' => 'required|unique:students',
            'nis' => 'required|unique:students',
            'nama' => 'required'
        ]);

        Student::create($validatedData);

        return redirect('/dashboard/students')->with('success', 'Siswa Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('dashboard.students.show', [
            'title' => 'Detail Siswa',
            'student' => $student,
            'reports' => $student->reports,
            'un' => $student->un,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('dashboard.students.edit',
            [
                'judul' => 'Edit Siswa',
                'student' => $student
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $rules = [
            'nama' => 'required'
        ];

        if ($request->nisn != $student->nisn) {
            $rules['nisn'] = 'required|unique:students';
        }

        if ($request->nis != $student->nis) {
            $rules['nis'] = 'required|unique:students';
        }

        $validatedData = $request->validate($rules);

        Student::where('id', $student->id)->update($validatedData);

        return redirect('/dashboard/students')->with('success', 'Siswa berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        
        return redirect('/dashboard/students')->with('success', 'Siswa berhasil di hapus');
    }
}
