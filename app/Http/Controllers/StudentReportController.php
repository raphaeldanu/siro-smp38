<?php

namespace App\Http\Controllers;

use App\Imports\StudentReportImport;
use App\Models\Student;
use App\Models\StudentReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

class StudentReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.import.index', [
            'title' => "Import File Raport",
            'link' => "import-raport"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Student $student)
    {
        return view('dashboard.reports.create', [
            'judul' => 'Tambah Raport Siswa',
            'student' => $student
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
        Excel::import(new StudentReportImport, request()->file('dataraport'));
        return redirect()->route('admin.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentReport  $studentReport
     * @return \Illuminate\Http\Response
     */
    public function show(StudentReport $studentReport)
    {
        return view('dashboard.reports.detail', [
            
            'student' => $studentReport->student,
            'report' => $studentReport
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentReport  $studentReport
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentReport $studentReport)
    {
        return view('dashboard.reports.edit', [
            'judul' => 'Edit Raport',
            'student' => $studentReport->student,
            'report' => $studentReport
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentReport  $studentReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentReport $studentReport)
    {
        $rules = [
            'student_id' => 'required|numeric',
            'rombel' => 'required|string',
            'tahun_pelajaran' => 'required|string',
            'sikap_spiritual' => 'required',
            'sikap_sosial' => 'required',
            'n_agama' => 'required|numeric|between:0,100',
            'n_ppkn' => 'required|numeric|between:0,100',
            'n_bindo' => 'required|numeric|between:0,100',
            'n_mat' => 'required|numeric|between:0,100',
            'n_ipa' => 'required|numeric|between:0,100',
            'n_ips' => 'required|numeric|between:0,100',
            'n_bing' => 'required|numeric|between:0,100',
            'n_seni' => 'required|numeric|between:0,100',
            'n_penjas' => 'required|numeric|between:0,100',
            'n_prakarya' => 'required|numeric|between:0,100',
            'n_bjawa' => 'required|numeric|between:0,100',
            'sakit' => 'required|numeric',
            'izin' => 'required|numeric',
            'tanpa_ket' => 'required|numeric',
            'keputusan' => 'required',
            'status' => 'required|boolean'
        ];

        $kelas = $request->kelas;
        $semester = $request->kelas;
        $student_id = $request->student_id;

        if ($request->kelas != $studentReport->kelas) {
            $rules['kelas'] = [
                'required',
                Rule::unique('student_reports')
                ->where(function ($query) use($kelas, $student_id, $semester){
                    return $query->where('kelas', $kelas)
                    ->where('student_id', $student_id)
                    ->where('semester', $semester);
                }),
            ];
        }

        if ($request->semester != $studentReport->semester) {
            $rules['semester'] = [
                'required',
                Rule::unique('student_reports')
                ->where(function ($query) use($kelas, $student_id, $semester){
                    return $query->where('kelas', $kelas)
                    ->where('student_id', $student_id)
                    ->where('semester', $semester);
                }),
            ];
        }

        $validatedData = $request->validate($rules);
        StudentReport::where('id', $studentReport->id)->update($validatedData);

        return redirect('/dashboard/students/'.$student_id)->with('Succes', "Raport berhasil diperbaharui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentReport  $studentReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentReport $studentReport)
    {
        $student_id = $studentReport->student_id;
        StudentReport::destroy($studentReport->id);

        return redirect('/dashboard/students/'.$student_id)->with('success', "Data Raport Berhasil dihapus");
    }

    public function storeOne(Request $request)
    {
        $student_id = $request->student_id;
        $kelas = $request->kelas;
        $semester = $request->semester;
        $validatedData = $request->validate([
            'student_id' => 'required|numeric',
            'kelas' => [
                'required',
                Rule::unique('student_reports')
                ->where(function ($query) use($kelas, $student_id, $semester){
                    return $query->where('kelas', $kelas)
                    ->where('student_id', $student_id)
                    ->where('semester', $semester);
                }),
            ],
            'rombel' => 'required|string',
            'semester' => [
                'required',
                Rule::unique('student_reports')
                ->where(function ($query) use($kelas, $student_id, $semester){
                    return $query->where('kelas', $kelas)
                    ->where('student_id', $student_id)
                    ->where('semester', $semester);
                }),
            ],
            'tahun_pelajaran' => 'required|string',
            'sikap_spiritual' => 'required',
            'sikap_sosial' => 'required',
            'n_agama' => 'required|numeric|between:0,100',
            'n_ppkn' => 'required|numeric|between:0,100',
            'n_bindo' => 'required|numeric|between:0,100',
            'n_mat' => 'required|numeric|between:0,100',
            'n_ipa' => 'required|numeric|between:0,100',
            'n_ips' => 'required|numeric|between:0,100',
            'n_bing' => 'required|numeric|between:0,100',
            'n_seni' => 'required|numeric|between:0,100',
            'n_penjas' => 'required|numeric|between:0,100',
            'n_prakarya' => 'required|numeric|between:0,100',
            'n_bjawa' => 'required|numeric|between:0,100',
            'sakit' => 'required|numeric',
            'izin' => 'required|numeric',
            'tanpa_ket' => 'required|numeric',
            'keputusan' => 'required',
            'status' => 'required|boolean'
        ]);
        

        StudentReport::create($validatedData);

        return redirect('/dashboard/students/');
    }
}
