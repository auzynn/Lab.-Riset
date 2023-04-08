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
        Schema::create('sertifikasi', function (Blueprint $table) {
            $table->id('id_sertifikasi');
            $table->unsignedBigInteger('id_supervisor');
            $table->string('link_sertifikasi');
            $table->timestamps();
    
            $table->foreign('id_supervisor')->references('id_supervisor')->on('supervisor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sertifikasi');
    }
};