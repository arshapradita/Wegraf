<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kegiatan_id')->unsigned();
            $table->foreign('kegiatan_id')references('id')->on('kegiatan')->onDelete('cascade');
            $table->integer('bidang_id')->unsigned();
            $table->foreign('bidang_id')references('id')->on('bidang')->onDelete('cascade');
            $table->integer('triwulan_id')->unsigned();
            $table->foreign('triwulan_id')references('id')->on('triwulan')->onDelete('cascade');
            $table->integer('rencana_anggaran');
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
        Schema::dropIfExists('program');
    }
}
