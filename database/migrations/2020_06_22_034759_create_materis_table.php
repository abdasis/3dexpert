<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->string('judul_materi', 100);
            $table->longText('diskripsi_materi', 100);
            $table->string('video_materi', 250);
            $table->string('ebook_materi', 250)->nullable();
            $table->string('durasi_materi', 100)->nullable()->default('text');
            $table->string('featured', 100)->nullable()->default('Tidak');
            $table->string('thumbnail_materi', 250)->nullable()->default('default-thumbnail.png');
            $table->foreignId('course_id')->constrained();
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
        Schema::dropIfExists('materis');
    }
}
