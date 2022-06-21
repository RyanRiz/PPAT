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
        Schema::create('orders', function (Blueprint $table){
            $table->id();
            $table->integer('ktp_pembeli');
            $table->integer('ktp_penjual');
            $table->string('jenis_permohonan');
            $table->string('petugas');
            $table->date('tanggal_permohonan');
            $table->date('tanggal_deadline');
            $table->boolean('confirmed');
            $table->string('jenis_sertifikat');
            $table->string('sertifikat');
            $table->string('nop');
            $table->string('nib');
            $table->string('no_ukur');
            $table->string('tanggal_ukur');
            $table->string('luas_tanah');
            $table->string('luas_bangunan');
            $table->string('lokasi_objek');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('kav');
            $table->string('nilai_transaksi');
            $table->string('terbilang');
            $table->string('tanggal_bayar_bphtb');
            $table->string('jumlah_bayar_bphtb');
            $table->string('kode_bayar_bphtb');
            $table->string('tanggal_bayar_pph');
            $table->string('jumlah_bayar_pph');
            $table->string('ntpn');
            $table->string('kuasa');
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
        //
    }
}
