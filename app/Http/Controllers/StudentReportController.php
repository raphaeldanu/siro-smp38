<?php

namespace App\Http\Controllers;

use App\Imports\StudentReportImport;
use App\Models\StudentReport;
use Illuminate\Http\Request;
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
            'title' => "File Import"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentReport  $studentReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentReport $studentReport)
    {
        //
    }
}
