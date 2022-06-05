<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('orders_id')->constrained()->onDelete('cascade');
            $table->string('nilai_transaksi');
            $table->string('terbilang');
            $table->string('tanggal_bayar_bphtb');
            $table->string('jumlah_bayar_bphtb');
            $table->string('kode_bayar_bphtb');
            $table->string('tanggal_bayar_pph');
            $table->string('jumlah_bayar_pph');
            $table->string('ntpn');
            $table->string('keterangan');
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
        Schema::dropIfExists('order_transactions');
    }
}
