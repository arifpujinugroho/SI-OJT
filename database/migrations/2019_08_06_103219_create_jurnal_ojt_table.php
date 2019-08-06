<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJurnalOjtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnal_ojt', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInt('id_ojt');
            $table->string('date_jurnal');
            $table->string('jam_datang');
            $table->string('jam_pulang');
            $table->longText('kegiatan')->nullable();
            $table->string('acc_dudi')->nullable();
            $table->longText('saran_kegiatan')->nullable();
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
        Schema::dropIfExists('jurnal_ojt');
    }
}
