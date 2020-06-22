<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelas', 100);
            $table->string('diskripsi_kelas', 100)->nullable()->default('diskripsi kelas');
            $table->string('level_kelas', 100);
            $table->string('nama_pengajar', 100);
            $table->string('harga_kelas', 100);
            $table->string('rating_kelas', 100);
            $table->string('trailer', 250);
            $table->string('thumbnail', 250);
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
        Schema::dropIfExists('courses');
    }
}
