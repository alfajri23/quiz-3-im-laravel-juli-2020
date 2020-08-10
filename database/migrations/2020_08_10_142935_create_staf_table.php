<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStafTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staf', function (Blueprint $table) {
            
            $table->unsignedBigInteger('id_manager');
            $table->foreign('id_manager')->references('id_manager')->on('manager');
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
        Schema::dropIfExists('staf');
    }
}
