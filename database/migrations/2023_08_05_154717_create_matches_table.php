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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_liga')->constrained('leagues')->onDelete('cascade');
            $table->foreignId('id_club_tuan_rumah')->constrained('clubs')->onDelete('cascade');
            $table->foreignId('id_club_tamu')->constrained('clubs')->onDelete('cascade');
            $table->string('hari');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('tempat');
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
        Schema::dropIfExists('matches');
    }
};
