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
        Schema::create('pelatih', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pelatih')->unique();
            $table->string('nama');
            $table->text('alamat');
            $table->date('tanggal_lahir');
            $table->string('lisensi');
            $table->unsignedBigInteger('club_id'); // Menambahkan kolom club_id

            // Menambahkan foreign key constraint ke tabel club
            $table->foreign('club_id')->references('id')->on('clubs');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pelatih');
    }
};
