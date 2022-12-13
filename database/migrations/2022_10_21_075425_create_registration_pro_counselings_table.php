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
        Schema::create('registration_pro_counselings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('procounseling_id')->constrained('professional_counselings');
            $table->foreignId('screening_id')->constrained('screenings');
            $table->string('consent_sharing');
            $table->string('consent_screening');
            $table->string('bukti_transfer')->nullable();
            $table->string('status_pendaftaran')->nullable();
            $table->string('perubahan_fisik');
            $table->string('perubahan_emosi');
            $table->string('riwayat_kecemasan');
            $table->string('penyakit_kronis');
            $table->string('konsumsi_alkohol');
            $table->string('konsumsi_obat');
            $table->string('pola_tidur');
            $table->string('pola_makan');
            $table->string('kondisi_keuangan');
            $table->string('ringkasan_masalah');
            $table->string('pernah_konseling');
            $table->string('menyakiti_diri');
            $table->string('mengakhiri_hidup');
            $table->string('sesi');
            $table->string('opsi_waktu1');
            $table->string('opsi_waktu2');
            $table->string('waktu_fix')->nullable();
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
        Schema::dropIfExists('registration_pro_counselings');
    }
};