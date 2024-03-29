<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilTesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_tes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->nullable();
            $table->string('nama')->nullable();
            $table->string('nomor_tes')->nullable();
            $table->date('tanggal_tes')->nullable();
            $table->time('waktu_mulai_akses')->nullable();
            $table->string('jumlah_benar_kategori1')->nullable();
            $table->string('jumlah_benar_kategori2')->nullable();
            $table->string('jumlah_benar_kategori3')->nullable();
            $table->string('hasil_akhir')->nullable();
            $table->dateTime('start')->nullable();
            $table->dateTime('finish')->nullable();
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
        Schema::dropIfExists('hasil_tes');
    }
}
