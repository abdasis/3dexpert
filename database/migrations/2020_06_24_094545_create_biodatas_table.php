<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('jenis_kelamin', 100)->nullable();
            $table->string('universitas', 100)->nullable();
            $table->string('alamat_lengkap', 100)->nullable();
            $table->string('kota', 100)->nullable();
            $table->string('biodata', 100)->nullable();
            $table->string('roles', 100);
            $table->string('phone', 100)->nullable()->default('text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('jenis_kelamin');
            $table->dropColumn('universitas');
            $table->dropColumn('alamat_lengkap');
            $table->dropColumn('biodata');
            $table->dropColumn('roles');
            $table->dropColumn('phone');
        });
    }
}
