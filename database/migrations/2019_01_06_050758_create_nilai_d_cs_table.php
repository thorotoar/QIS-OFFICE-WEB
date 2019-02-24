<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiDCsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_d_cs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('peserta_id')->unsigned()->nullable();
            $table->foreign('peserta_id')->references('id')->on('peserta_didiks')->onDelete('SET NULL')->onUpdate('CASCADE');
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
        Schema::dropIfExists('nilai_d_cs');
    }
}
