<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pasien', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table-> string('nama_pasien');
            $table->date('tanggal_lahir');
             $table->char('jenis_kelamin');
              $table->string('alamat_pasien');
               $table->string('orangtua_pasien');
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
        Schema::dropIfExists('table_pasien');
    }
}
