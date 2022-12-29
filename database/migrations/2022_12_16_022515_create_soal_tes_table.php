<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalTesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_tes', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_soal')->nullable();
            $table->text('isi_soal')->nullable();
            $table->string('gambar_soal')->nullable();
            $table->string('pil_a')->nullable();
            $table->string('gambar_pil_a')->nullable();
            $table->string('pil_b')->nullable();
            $table->string('gambar_pil_b')->nullable();
            $table->string('pil_c')->nullable();
            $table->string('gambar_pil_c')->nullable();
            $table->string('pil_d')->nullable();
            $table->string('gambar_pil_d')->nullable();
            $table->string('jawaban')->nullable();
            $table->integer('bobot')->nullable();
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
        Schema::dropIfExists('soal_tes');
    }
}
