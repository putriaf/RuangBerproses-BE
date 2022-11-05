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
            $table->string('preferensi_jk_konselor');
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
            $table->string('marah_sepele');
            $table->string('mulut_kering');
            $table->string('tdk_melihat_hal_positif');
            $table->string('gangguan_napas');
            $table->string('tdk_kuat_kegiatan');
            $table->string('overreacting');
            $table->string('anggota_tubuh_lemah');
            $table->string('sulit_bersantai');
            $table->string('cemas_berlebih');
            $table->string('pesimis');
            $table->string('mudah_kesal');
            $table->string('energi_habis');
            $table->string('sedih_depresi');
            $table->string('tidak_sabaran');
            $table->string('kelelahan');
            $table->string('hilang_minat');
            $table->string('merasa_tdk_layak');
            $table->string('mudah_tersinggung');
            $table->string('berkeringat');
            $table->string('takut_tanpa_alasan');
            $table->string('merasa_tdk_berharga');
            $table->string('sulit_istirahat');
            $table->string('sulit_menelan');
            $table->string('tdk_menikmati_aktivitas');
            $table->string('perubahan_denyut_nadi');
            $table->string('hilang_harapan');
            $table->string('mudah_marah');
            $table->string('mudah_panik');
            $table->string('sulit_tenang');
            $table->string('takut_terhambat');
            $table->string('sulit_antusias');
            $table->string('sulit_toleransi_gangguan');
            $table->string('tegang');
            $table->string('tdk_memaklumi_halangan');
            $table->string('ketakutan');
            $table->string('tdk_ada_harapan');
            $table->string('hidup_tdk_berarti');
            $table->string('mudah_gelisah');
            $table->string('khawatir_dg_situasi');
            $table->string('gemetar');
            $table->string('sulit_inisiatif');
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