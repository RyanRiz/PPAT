<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Permohonan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table){
            $table->id();
            $table->integer('pembeli_id');
            $table->integer('penjual_id');
            $table->string('jenis_permohonan');
            $table->string('jenis_sertifikat');
            $table->string('sertifikat')->unique();
            $table->integer('luas_tanah');
            $table->integer('luas_bangunan');
            $table->string('nop');
            $table->string('lokasi_objek');
            $table->string('kelurahan');
            $table->string('kecamatan');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
