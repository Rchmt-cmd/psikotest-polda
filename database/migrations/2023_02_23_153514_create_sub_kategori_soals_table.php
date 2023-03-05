<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubKategoriSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_kategori_soals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kategori');
            $table->string('deskripsi_subkategori')->nullable();
            $table->string('isi_subkategori')->nullable();
            $table->string('gambar_subkategori')->nullable();
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
        Schema::dropIfExists('sub_kategori_soals');
    }
}
