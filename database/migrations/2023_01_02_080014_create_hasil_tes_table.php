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
            $table->foreignId('id_user');
            $table->foreignId('id_soal');
            $table->string('hasil_akhir');
            $table->dateTime('start');
            $table->dateTime('finish');
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
