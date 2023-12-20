<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->smallInteger('kelas');
            $table->string('rombel', 1);
            $table->smallInteger('semester');
            $table->string('tahun_pelajaran', 10);
            $table->string('sikap_spiritual', 25);
            $table->string('sikap_sosial', 25);
            $table->smallInteger('n_agama_p');
            $table->smallInteger('n_agama_k');
            $table->smallInteger('n_ppkn_p');
            $table->smallInteger('n_ppkn_k');
            $table->smallInteger('n_bindo_p');
            $table->smallInteger('n_bindo_k');
            $table->smallInteger('n_mat_p');
            $table->smallInteger('n_mat_k');
            $table->smallInteger('n_ipa_p');
            $table->smallInteger('n_ipa_k');
            $table->smallInteger('n_ips_p');
            $table->smallInteger('n_ips_k');
            $table->smallInteger('n_bing_p');
            $table->smallInteger('n_bing_k');
            $table->smallInteger('n_seni_p');
            $table->smallInteger('n_seni_k');
            $table->smallInteger('n_penjas_p');
            $table->smallInteger('n_penjas_k');
            $table->smallInteger('n_prakarya_p');
            $table->smallInteger('n_prakarya_k');
            $table->smallInteger('n_bjawa_p');
            $table->smallInteger('n_bjawa_k');
            $table->smallInteger('sakit'); // Kehadiran
            $table->smallInteger('izin'); // Kehadiran
            $table->smallInteger('tanpa_ket'); // Kehadiran
            $table->text('keputusan'); // Naik kelas atau tidak
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_reports');
    }
}
