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
            $table->integer('kelas');
            $table->string('rombel', 1);
            $table->integer('semester');
            $table->string('tahun_pelajaran', 10);
            $table->string('sikap_spiritual');
            $table->text('deskripsi_sikap_spiritual');
            $table->string('sikap_sosial');
            $table->text('deskripsi_sikap_sosial');
            $table->integer('n_agama');
            $table->integer('n_ppkn');
            $table->integer('n_bindo');
            $table->integer('n_mat');
            $table->integer('n_ipa');
            $table->integer('n_ips');
            $table->integer('n_bing');
            $table->integer('n_seni');
            $table->integer('n_penjas');
            $table->integer('n_prakarya');
            $table->integer('n_bjawa');
            $table->integer('sakit');
            $table->integer('izin');
            $table->integer('tanpa_ket');
            $table->text('catatan_wali_kelas');
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
