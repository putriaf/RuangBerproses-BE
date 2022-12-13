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
        Schema::create('counselors', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jk');
            $table->string('tgl_lahir')->nullable();
            $table->text('riwayat_pendidikan');
            $table->string('lama_kerja');
            $table->string('pengalaman_kerja');
            $table->string('bidang_keahlian');
            $table->string('link_linkedin')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('counselors');
    }
};