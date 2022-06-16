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
        Schema::create('tamu_kategoris', function (Blueprint $table) {
            $table->id('nomor');
            $table->unsignedBigInteger('tamus_nomor');
            $table->unsignedBigInteger('kategoris_nomor');
    
            $table->foreign('tamus_nomor')->references('nomor')->on('bukutamus');
            $table->foreign('kategoris_nomor')->references('nomor')->on('kategoris');
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
        Schema::dropIfExists('tamu_kategoris');
    }
};
