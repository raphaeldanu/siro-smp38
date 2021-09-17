<?php

namespace App\Imports;

use App\Models\Student;
use App\Models\StudentReport;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentReportImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $students = Student::all();
            $reports = StudentReport::all();
            // Cek apakah nisn sudah ada atau belum
            if ($students->contains('nisn', $row['nisn'])) {
                $student = $students->firstWhere('nisn', $row['nisn']);
            } else {
                $student = Student::create([
                    'nisn' => $row['nisn'],
                    'nis' => $row['nis'],
                    'nama' => $row['nama']
                ]);
            }
            
            if ($reports->where('nisn', $student->nisn)
                                ->where('kelas', $row['kelas'])
                                ->where('semester', $row['semester'])
                                ->doesntExist()) { // Check apakah ada raport yang nisn, kelas, dan semesternya sama, kalo tidak ada, maka akan insert, jika ada maka tidak.
                // Insert Student Report to Table
                StudentReport::create([
                    'student_id' => $student->id,
                    'kelas' => $row['kelas'],
                    'rombel' => $row['rombel'],
                    'semester' => $row['semester'],
                    'tahun_pelajaran' => $row['tahun_pelajaran'],
                    'sikap_spiritual' => $row['sikap_spiritual'],
                    'sikap_sosial' => $row['sikap_sosial'],
                    'n_agama' => $row['n_agama'],
                    'n_ppkn' => $row['n_ppkn'],
                    'n_bindo' => $row['n_bindo'],
                    'n_mat' => $row['n_mat'],
                    'n_ipa' => $row['n_ipa'],
                    'n_ips' => $row['n_ips'],
                    'n_bing' => $row['n_bing'],
                    'n_seni' => $row['n_seni'],
                    'n_penjas' => $row['n_penjas'],
                    'n_prakarya' => $row['n_prakarya'],
                    'n_bjawa' => $row['n_bjawa'],
                    'sakit' => $row['sakit'],
                    'izin' => $row['izin'],
                    'tanpa_ket' => $row['tanpa_ket'],
                    'keputusan' => $row['keputusan'],
                ]);
            }
        }
    }
}
