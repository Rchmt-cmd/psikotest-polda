<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jadwal')->nullable();
            $table->string('name');
            // $table->string('email')->unique();
            $table->boolean('is_admin')->nullable();
            $table->string('password');
            $table->string('old_password')->nullable();
            $table->string('nomor_tes')->nullable();
            $table->boolean('status_tes')->nullable();
            $table->string('progres_tes')->nullable();
            // $table->char('jenis_kelamin')->nullable();
            // $table->date('tgl_lahir')->nullable();
            // $table->string('tmpt_lahir')->nullable();
            // $table->string('alamat')->nullable();
            $table->string('no_hp')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
