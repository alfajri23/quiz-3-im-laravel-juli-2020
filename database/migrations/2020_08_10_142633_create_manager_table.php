<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager', function (Blueprint $table) {
            $table->bigIncrements('id_manager');
            $table->unsignedBigInteger('id_proyek');
            $table->foreign('id_proyek')->references('id_proyek')->on('proyek');
            $table->unsignedBigInteger('id_karyawan');
            $table->foreign('id_karyawan')->references('id_karyawan')->on('karyawan');
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
        Schema::dropIfExists('manager');
    }
}
