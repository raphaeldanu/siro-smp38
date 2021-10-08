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
            $table->smallInteger('n_agama');
            $table->smallInteger('n_ppkn');
            $table->smallInteger('n_bindo');
            $table->smallInteger('n_mat');
            $table->smallInteger('n_ipa');
            $table->smallInteger('n_ips');
            $table->smallInteger('n_bing');
            $table->smallInteger('n_seni');
            $table->smallInteger('n_penjas');
            $table->smallInteger('n_prakarya');
            $table->smallInteger('n_bjawa');
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
