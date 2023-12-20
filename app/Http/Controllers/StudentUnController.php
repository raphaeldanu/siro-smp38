<?php

namespace App\Http\Controllers;

use App\Imports\UnImports;
use App\Models\Student;
use App\Models\StudentUn;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentUnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.import.index', [
            'title' => "Import File UN",
            'link' => "import-un"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Student $student)
    {
        return view('dashboard.un.create', [
            'judul' => 'Input Nilai UN',
            'student' => $student,
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {
        //Memanggil fungsi dari Un Import untuk menginput file yang dikirim ke form
        Excel::import(new UnImports, $request->file('dataraport'));
        return redirect()->route('admin.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentUn  $studentUn
     * @return \Illuminate\Http\Response
     */
    public function show(StudentUn $studentUn)
    {
        //Menampilkan STUDENT UN
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentUn  $studentUn
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentUn $studentUn)
    {
        //Menampilkan form edit
        return view('dashboard.un.edit', [
            'judul' => 'Edit Nilai UN',
            'un' => $studentUn,
            'student' => $studentUn->student
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentUn  $studentUn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentUn $studentUn)
    {
        //Update
        $validatedData = $request->validate([
            'n_bindo' => 'required|numeric|between:0,100',
            'n_mat' => 'required|numeric|between:0,100',
            'n_ipa' => 'required|numeric|between:0,100',
            'n_bing' => 'required|numeric|between:0,100',
            'keputusan' => 'required',
            'status' => 'required'
        ]);

        StudentUn::where('id', $studentUn->id)->update($validatedData);
        $student_id = $studentUn->student_id;
        return redirect('/dashboard/students/'.$student_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentUn  $studentUn
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentUn $studentUn)
    {
        //Delete
        $student_id = $studentUn->student_id;
        StudentUn::destroy($studentUn->id);
        return redirect('/dashboard/students/'.$student_id);
    }

    public function store(Request $request)
    {
        //Save 1 Nilai
        $student_id = $request->student_id;
        $validatedData = $request->validate([
            'student_id' => 'required|unique:student_uns',
            'n_bindo' => 'required|numeric|between:0,100',
            'n_mat' => 'required|numeric|between:0,100',
            'n_ipa' => 'required|numeric|between:0,100',
            'n_bing' => 'required|numeric|between:0,100',
            'keputusan' => 'required',
            'status' => 'required'
        ]);

        StudentUn::create($validatedData);

        return redirect('/dashboard/students/'.$student_id);
    }
}