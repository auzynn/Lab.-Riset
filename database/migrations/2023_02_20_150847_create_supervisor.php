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
        Schema::create('supervisor', function (Blueprint $table) {
            $table->id('id_supervisor');
            $table->unsignedBigInteger('id_user');
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('no_hp');
            $table->text('alamat');
            $table->timestamps();
    
            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supervisor');
    }
};