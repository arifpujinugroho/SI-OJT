<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nis')->unique();
            $table->string('nama_siswa');
            $table->string('tempatlahir')->nullable();
            $table->date('tanggallahir')->nullable();
            $table->longText('alamat_siswa')->nullable();
            $table->enum('jns_kelamin_siswa',['L','P']);
            $table->string('telepon_siswa')->nullable();
            $table->enum('goldar_siswa',['A','B','AB','O','-'])->default('-');
            $table->string('nama_ortu')->nullable();
            $table->longText('alamat_ortu')->nullable();
            $table->unsignedBigInt('id_jurusan');
            $table->unsignedBigInt('id_user');
            $table->longText('crypt_siswa')->nullable();
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
        Schema::dropIfExists('siswa');
    }
}
