<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePerikasa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perikasa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('berat_badan');
            $table->unsignedBigInteger('tingg_badan');
            $table->unsignedBigInteger('usia');
            $table->date('tanggal_perikasa');
            $table->unsignedBigInteger('id_pasien');
            $table->foreign('id_pasien')->references('id')->on('table_pasien')->oneDelede('cascade');
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
        Schema::dropIfExists('table_perikasa');
    }
}
 