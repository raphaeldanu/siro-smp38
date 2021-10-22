<?php

namespace App\Imports;

use App\Models\Student;
use App\Models\StudentUn;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UnImports implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            // Cek apakah nisn sudah ada atau belum
            if (DB::table('students')->where('nisn', "00".$row["nisn"])->exists()) {
                $student = DB::table('students')->where('nisn', "00".$row["nisn"])->first();
            } else {
                $student = Student::create([
                    'nisn' => "00".$row['nisn'],
                    'nis' => $row['nis'],
                    'nama' => $row['nama']
                ]);
            }
            
            // Check apakah ada nilai un sudah ada di tabel atau belom
            if (DB::table('student_uns')->where('student_id', $student->id)->doesntExist()) { 
                // Insert Student Report to Table
                StudentUn::create([
                    'student_id' => $student->id,
                    'n_bindo' => $row['n_bindo'],
                    'n_mat' => $row['n_mat'],
                    'n_ipa' => $row['n_ipa'],
                    'n_bing' => $row['n_bing'],
                    'keputusan' => $row['keputusan'],
                    'status' => $row['status']
                ]);
            }
        }
    }
}