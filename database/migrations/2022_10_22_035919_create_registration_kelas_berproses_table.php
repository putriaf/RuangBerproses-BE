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
        Schema::create('registration_kelas_berproses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('kb_id')->constrained('kelas_berproses');
            $table->string('alasan');
            $table->string('asal_info');
            $table->string('pertanyaan');
            $table->string('bukti_transfer');
            $table->string('status_pendaftaran');
            $table->string('ide_topik');
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
        Schema::dropIfExists('registration_kelas_berproses');
    }
};