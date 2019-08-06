<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembimbingDudiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembimbing_dudi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInt('id_ojt');
            $table->string('nama_pembimbing')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('telepon_pembimbing')->nullable();
            $table->longText('ket_pembimbing')->nullable();
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
        Schema::dropIfExists('pembimbing_dudi');
    }
}
