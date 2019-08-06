<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDudiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dudi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_dudi');
            $table->string('alamat_dudi')->nullable();
            $table->string('telepon_dudi')->nullable();
            $table->string('email_dudi')->nullable();
            $table->longText('crypt_dudi')->nullable();
            $table->unsignedBigInt('id_user');
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
        Schema::dropIfExists('dudi');
    }
}
