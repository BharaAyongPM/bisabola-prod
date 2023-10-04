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
        Schema::create('player_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('musim');
            $table->string('kompetisi');
            $table->unsignedBigInteger('pemain_id');
            $table->foreign('pemain_id')->references('id')->on('players');
            $table->unsignedBigInteger('klub_id');
            $table->foreign('klub_id')->references('id')->on('clubs');
            $table->integer('gol');
            $table->integer('asist');
            $table->integer('kartu_kuning');
            $table->integer('kuning_kuning');
            $table->integer('kartu_merah');
            $table->year('tahun');
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
        Schema::dropIfExists('player_statistics');
    }
};
