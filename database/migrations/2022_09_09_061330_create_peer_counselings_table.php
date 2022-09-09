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
        Schema::create('peer_counselings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('status');
            $table->string('domisili');
            $table->string('pernah_gabung');
            $table->string('konselor');
            $table->string('pengalaman');
            $table->text('keluhan');
            $table->text('latar_belakang');
            $table->text('tujuan');
            $table->string('consent_sharing');
            $table->string('consent_screening');
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
        Schema::dropIfExists('peer_counselings');
    }
};
