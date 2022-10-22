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
        Schema::create('registration_support_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('supportgroup_id')->constrained('support_groups');
            $table->string('tujuan');
            $table->string('alasan');
            $table->string('harapan');
            $table->string('preferensi_jk_fasilitator');
            $table->string('preferensi_jk_teman');
            $table->string('diagnosis');
            $table->string('terlibat_aktif');
            $table->string('mengikuti_full');
            $table->string('batasan_pribadi');
            $table->string('consent_screening');
            $table->string('consent_sharing');
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
        Schema::dropIfExists('registration_support_groups');
    }
};