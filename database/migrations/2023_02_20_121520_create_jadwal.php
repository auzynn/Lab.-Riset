<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->unsignedBigInteger('id_dosen');
            $table->unsignedBigInteger('id_ruangan_lab');
            $table->string('nama_praktikum');
            $table->dateTime('jadwal');
            $table->integer('jumlah_mahasiswa');
            $table->timestamps();

            $table->foreign('id_dosen')->references('id_dosen')->on('dosen');
            $table->foreign('id_ruangan_lab')->references('id_ruangan_lab')->on('ruangan_lab');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
};