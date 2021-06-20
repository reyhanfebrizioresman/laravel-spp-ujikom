<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->date('tanggal_bayar');
            $table->string('bulan_bayar',2)->nullable();
            $table->string('tahun_bayar',4)->nullable();
            $table->string('jumlah_bayar',11);
            $table->integer('id_petugas')->unsigned();
            $table->foreign('id_petugas')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('pembayarans');
    }
}
