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
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->integer('jenis_id')->unsigned()->nullable();
            $table->foreign('jenis_id')->references('id')->on('jenis_surats')->onDelete('set null')->onUpdate('cascade');
            $table->string('no_surat')->nullable();
            $table->string('kode_surat')->nullable();
            $table->string('tempat')->nullable();
            $table->string('perihal')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('bagian_tujuan')->nullable();
            $table->text('alamat_tujuan')->nullable();
            $table->string('tgl_keluar')->nullable();
            $table->string('tgl_dicatat')->nullable();
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
        Schema::dropIfExists('surat_keluars');
    }
}
