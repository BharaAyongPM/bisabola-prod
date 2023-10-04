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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('player_code')->unique();
            $table->unsignedBigInteger('club_id');
            $table->string('nama');
            $table->string('posisi');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->float('tinggi');
            $table->float('berat');
            $table->text('alamat');
            $table->string('kota');
            $table->string('propinsi');
            $table->string('no_whatsapp');
            $table->string('foto');
            $table->string('agama');
            $table->timestamps();

            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
};
