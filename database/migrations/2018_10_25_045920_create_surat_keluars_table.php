<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keluars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jenissurat_id')->unsigned();
            $table->foreign('jenissurat_id')->references('id')->on('jenis_surats');
            $table->string('no_surat');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('lampiran');
            $table->string('perihal');
            $table->string('tujuan');
            $table->date('tgl_keluar');
            $table->date('tgl_dicaat');
            $table->text('pembuka');
            $table->text('isi');
            $table->text('penutup');
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
        Schema::dropIfExists('surat_keluars');
    }
}
