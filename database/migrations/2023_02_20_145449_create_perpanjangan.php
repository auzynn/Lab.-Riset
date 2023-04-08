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
        Schema::create('perpanjangan', function (Blueprint $table) {
            $table->id('id_perpanjangan');
            $table->unsignedBigInteger('id_peminjaman_lab');
            $table->unsignedBigInteger('id_peminjaman_perangkat');
            $table->dateTime('perpanjangan');
            $table->timestamps();

            $table->foreign('id_peminjaman_lab')->references('id_peminjaman_lab')->on('peminjaman_lab');
            $table->foreign('id_peminjaman_perangkat')->references('id_peminjaman_perangkat')->on('peminjaman_perangkat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perpanjangan');
    }
};