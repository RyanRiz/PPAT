<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutcome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outcome', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pembelian');
            $table->string('nama_barang');
            $table->integer('jumlah_barang');
            $table->decimal('harga', $precision = 20, $scale = 2);
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
        Schema::dropIfExists('outcome');
    }
}
