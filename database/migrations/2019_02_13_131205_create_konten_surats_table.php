<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontenSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konten_surats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('isi_id')->unsigned();
            $table->foreign('isi_id')->references('id')->on('isi_surats')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_barang')->nullable();
            $table->string('jumlah_barang')->nullable();
            $table->string('harga_barang')->nullable();
            $table->string('jenis_program')->nullable();
            $table->string('lama_program')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('konten_surats');
    }
}
