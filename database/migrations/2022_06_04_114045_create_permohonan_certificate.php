<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanCertificate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_certificates', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('orders_id')->constrained()->onDelete('cascade');
            $table->string('jenis_sertifikat');
            $table->string('sertifikat');
            $table->string('nop');
            $table->string('nib');
            $table->string('no_ukur');
            $table->string('tanggal_ukur');
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
        Schema::dropIfExists('order_certificates');
    }
}
