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
        Schema::create('pendaftar_sertifikasi', function (Blueprint $table) {
            $table->id('id_sertifikasi');
            $table->unsignedBigInteger('id_supervisor');
            $table->unsignedBigInteger('id_mahasiswa');
            $table->timestamps();
    
            $table->foreign('id_supervisor')->references('id_supervisor')->on('supervisor');
            $table->foreign('id_mahasiswa')->references('id_mahasiswa')->on('mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar_sertifikasi');
    }
};