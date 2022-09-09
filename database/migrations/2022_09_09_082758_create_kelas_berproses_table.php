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
        Schema::create('kelas_berproses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('usia');
            $table->string('pilihan_kelasberproses');
            $table->string('domisili');
            $table->string('pekerjaan');
            $table->string('alasan');
            $table->string('pernah_gabung');
            $table->string('pertanyaan');
            $table->string('sumber_info');
            $table->string('bukti_transfer');
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
        Schema::dropIfExists('kelas_berproses');
    }
};
