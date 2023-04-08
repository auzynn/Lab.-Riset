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
        Schema::create('peminjaman_lab', function (Blueprint $table) {
            $table->id('id_peminjaman_lab');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_ruangan_lab');
            $table->unsignedBigInteger('id_perangkat');
            $table->date('tgl_peminjaman');
            $table->date('tgl_selesai_peminjaman');
            $table->string('keterangan_keperluan');
            $table->timestamps();


            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_ruangan_lab')->references('id_ruangan_lab')->on('ruangan_lab');
            $table->foreign('id_perangkat')->references('id_perangkat')->on('perangkat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman_lab');
    }
};