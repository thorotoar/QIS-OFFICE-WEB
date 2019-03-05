<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIsiSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isi_surats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('surat_keluar_id')->unsigned();
            $table->foreign('surat_keluar_id')->references('id')->on('surat_keluars')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_pegawai')->nullable();
            $table->string('tempat_lahir_pegawai')->nullable();
            $table->string('tanggal_lahir_pegawai')->nullable();
            $table->string('jurusan_pegawai')->nullable();
            $table->string('jenjang_pegawai')->nullable();
            $table->string('institur_pegawai')->nullable();
            $table->string('tahun_lulus_pegawai')->nullable();
            $table->string('nama_peserta')->nullable();
            $table->string('kabupaten_peserta')->nullable();
            $table->string('provinsi_peserta')->nullable();
            $table->string('instruktur')->nullable();
            $table->string('hasil_evaluasi')->nullable();
            $table->string('jumlah_program')->nullable();
            $table->string('besar_biyaya')->nullable();
            $table->string('jumlah_peserta')->nullable();
            $table->text('deskripsi_peserta')->nullable();
            $table->string('hari_tanggal_1')->nullable();
            $table->string('hari_tanggal_2')->nullable();
            $table->string('jam_kembali')->nullable();
            $table->string('lembaga')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('tanggal_1')->nullable();
            $table->string('tanggal_2')->nullable();
            $table->string('tanggal_3')->nullable();
            $table->string('tanggal_4')->nullable();
            $table->text('isi_surat')->nullable();
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
        Schema::dropIfExists('isi_surats');
    }
}
