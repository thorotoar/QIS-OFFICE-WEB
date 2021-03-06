<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatPendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pendidikans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pegawai_id')->unsigned();
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->integer('jenjang_id')->unsigned();
            $table->foreign('jenjang_id')->references('id')->on('jenjangs');
            $table->integer('jurusan_id')->unsigned()->nullable();
            $table->foreign('jurusan_id')->references('id')->on('jurusan_pendidikans')->onDelete('SET NULL')->onUpdate('CASCADE');
            $table->string('instansi')->nullable();
            $table->string('thn_lulus');
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
        Schema::dropIfExists('riwayat_pendidikans');
    }
}
