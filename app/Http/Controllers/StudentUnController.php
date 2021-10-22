<?php

namespace App\Http\Controllers;

use App\Imports\UnImports;
use App\Models\StudentUn;
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
        //
        Excel::import(new UnImports, request()->file('dataraport'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentUn  $studentUn
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentUn $studentUn)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentUn  $studentUn
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentUn $studentUn)
    {
        //
    }
}
