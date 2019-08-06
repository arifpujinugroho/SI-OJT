<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOjtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ojt', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date_mulai')->nullable();
            $table->string('date_mulai')->nullable();
            $table->longText('keterangan_ojt')->nullable();
            $table->unsignedBigInt('id_siswa');
            $table->unsignedBigInt('id_tahun_ojt');
            $table->unsignedBigInt('id_guru');
            $table->unsignedBigInt('id_dudi');
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
        Schema::dropIfExists('ojt');
    }
}
