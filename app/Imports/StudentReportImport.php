<?php

namespace App\Imports;

use App\Models\Student;
use App\Models\StudentReport;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;

class StudentReportImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            // Cek apakah nisn sudah ada atau belum
            if (DB::table('students')->where('nisn', "00".$row[0])->exists()) {
                $student = DB::table('students')->where('nisn', "00".$row[0])->first();
            } else {
                $student = Student::create([
                    'nisn' => "00".$row[0],
                    'nis' => $row[1],
                    'nama' => $row[2]
                ]);
            }
            
            if (DB::table('student_reports')->where('student_id', $student->id)->where('kelas', $row[3])->where('semester', $row[5])->doesntExist()) { // Check apakah ada raport yang nisn, kelas, dan semesternya sama, kalo tidak ada, maka akan insert, jika ada maka tidak.
                // Insert Student Report to Table
                StudentReport::create([
                    'student_id' => $student->id,
                    'kelas' => $row[3],
                    'rombel' => $row[4],
                    'semester' => $row[5],
                    'tahun_pelajaran' => $row[6],
                    'sikap_spiritual' => $row[7],
                    'sikap_sosial' => $row[8],
                    'n_agama' => $row[9],
                    'n_ppkn' => $row[10],
                    'n_bindo' => $row[11],
                    'n_mat' => $row[12],
                    'n_ipa' => $row[13],
                    'n_ips' => $row[14],
                    'n_bing' => $row[15],
                    'n_seni' => $row[16],
                    'n_penjas' => $row[17],
                    'n_prakarya' => $row[18],
                    'n_bjawa' => $row[19],
                    'sakit' => $row[20],
                    'izin' => $row[21],
                    'tanpa_ket' => $row[22],
                    'keputusan' => $row[23],
                ]);
            }
        }
    }
}
