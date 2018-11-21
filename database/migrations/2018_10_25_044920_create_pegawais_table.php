<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nik');
            $table->string('foto')->nullable();
            $table->string('nama');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('kelamin');
            $table->integer('agama_id')->unsigned();
            $table->foreign('agama_id')->references('id')->on('agamas');
            $table->integer('kewarganegaraan_id')->unsigned();
            $table->foreign('kewarganegaraan_id')->references('id')->on('kewarganegaraans');
            $table->string('telpon');
            $table->string('email')->unique();
            $table->string('status_pernikahan');
            $table->string('nuptk')->nullable();
            $table->string('no_rek')->nullable();
            $table->integer('bank_id')->unsigned()->nullable();
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->string('kcp_bank')->nullable();
            $table->string('ibu');
            $table->string('nik_ibu');
            $table->string('ayah');
            $table->string('nik_ayah');
            $table->string('pasangan')->nullable();
            $table->string('pekerjaan_pasangan')->nullable();
            $table->date('tgl_masuk');
            $table->string('no_sk')->nullable();
            $table->integer('jabatan_id')->unsigned();
            $table->foreign('jabatan_id')->references('id')->on('jabatans');
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
        Schema::dropIfExists('pegawais');
    }
}
