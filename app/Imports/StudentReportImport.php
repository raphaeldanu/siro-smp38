<?php

namespace App\Imports;

use App\Models\Student;
use App\Models\StudentReport;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentReportImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
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
            
            if (DB::table('student_reports')->where('student_id', $student->id)
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
                    'n_agama_p' => $row['n_agama_p'],
                    'n_agama_k' => $row['n_agama_k'],
                    'n_ppkn_p' => $row['n_ppkn_p'],
                    'n_ppkn_k' => $row['n_ppkn_k'],
                    'n_bindo_p' => $row['n_bindo_p'],
                    'n_bindo_k' => $row['n_bindo_k'],
                    'n_mat_p' => $row['n_mat_p'],
                    'n_mat_k' => $row['n_mat_k'],
                    'n_ipa_p' => $row['n_ipa_p'],
                    'n_ipa_k' => $row['n_ipa_k'],
                    'n_ips_p' => $row['n_ips_p'],
                    'n_ips_k' => $row['n_ips_k'],
                    'n_bing_p' => $row['n_bing_p'],
                    'n_bing_k' => $row['n_bing_k'],
                    'n_seni_p' => $row['n_seni_p'],
                    'n_seni_k' => $row['n_seni_k'],
                    'n_penjas_p' => $row['n_penjas_p'],
                    'n_penjas_k' => $row['n_penjas_k'],
                    'n_prakarya_p' => $row['n_prakarya_p'],
                    'n_prakarya_k' => $row['n_prakarya_k'],
                    'n_bjawa_p' => $row['n_bjawa_p'],
                    'n_bjawa_k' => $row['n_bjawa_k'],
                    'sakit' => $row['sakit'],
                    'izin' => $row['izin'],
                    'tanpa_ket' => $row['tanpa_ket'],
                    'keputusan' => $row['keputusan'],
                    'status' => $row['status']
                ]);
            }
        }
    }
}
