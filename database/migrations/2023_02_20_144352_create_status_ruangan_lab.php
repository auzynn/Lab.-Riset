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
        Schema::create('status_ruangan_lab', function (Blueprint $table) {
            $table->id('id_status_ruangan_lab');
            $table->unsignedBigInteger('id_ruangan_lab');
            $table->string('status_ruangan_lab');
            $table->timestamps();

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
        Schema::dropIfExists('status_ruangan_lab');
    }
};