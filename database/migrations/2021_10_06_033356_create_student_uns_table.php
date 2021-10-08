<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentUnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_uns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->smallInteger('n_bindo');
            $table->smallInteger('n_mat');
            $table->smallInteger('n_ipa');
            $table->smallInteger('n_bing');
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
        Schema::dropIfExists('student_uns');
    }
}
