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
            $table->longText('diskripsi_kelas', 100)->nullable();
            $table->string('level_kelas', 100);
            $table->string('nama_pengajar', 100);
            $table->string('harga_kelas', 100);
            $table->string('harga_coret', 100);
            $table->string('jumlah_video', 250);
            $table->string('rating_kelas', 100);
            $table->string('trailer', 250);
            $table->string('thumbnail', 250);
            $table->string('kategori_kelas', 100);
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
