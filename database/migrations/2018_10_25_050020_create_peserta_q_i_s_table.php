<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertaQISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_q_i_s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_identitas');
            $table->string('nama_pes_qis');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('no_telp');
            $table->string('email')->unique();
            $table->integer('agama_id')->unsigned();
            $table->foreign('agama_id')->references('id')->on('agamas');
            $table->string('jenis_kelamin');
            $table->date('tgl_masuk');
            $table->string('nilai_peserta');
            $table->string('sertifikat');
            $table->date('tgl_keluar');
            $table->integer('lembaga_id')->unsigned();
            $table->foreign('lembaga_id')->references('id')->on('lembagas');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('peserta_q_i_s');
    }
}
