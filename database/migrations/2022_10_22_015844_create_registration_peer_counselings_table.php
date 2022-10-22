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
        Schema::create('registration_peer_counselings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('peercounseling_id')->constrained('peer_counselings');
            $table->string('latar_belakang');
            $table->string('tujuan');
            $table->string('keluhan');
            $table->string('preferensi_jk_konselor');
            $table->string('consent_sharing');
            $table->string('consent_screening');
            $table->string('bukti_transfer');
            $table->string('status_pendaftaran');
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
        Schema::dropIfExists('registration_peer_counselings');
    }
};