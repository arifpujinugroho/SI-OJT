<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminJurusanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_jurusan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInt('id_jurusan');
            $table->longText('crypt_adjur')->nullable();
            $table->longText('keterangan')->nullable();
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
        Schema::dropIfExists('admin_jurusan');
    }
}
