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
        Schema::create('status_perangkat', function (Blueprint $table) {
            $table->id('id_status_perangkat');
            $table->unsignedBigInteger('id_perangkat');
            $table->string('status_perangkat');
            $table->timestamps();

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
        Schema::dropIfExists('status_perangkat');
    }
};