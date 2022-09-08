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
        Schema::create('support_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('topik');
            $table->text('diagnosis');
            $table->string('pernah_gabung');
            $table->string('pengalaman');
            $table->string('fasilitator');
            $table->string('teman_kelompok');
            $table->string('alasan');
            $table->text('batasan_pribadi');
            $table->text('harapan');
            $table->string('bukti_transfer')->nullable();
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
        Schema::dropIfExists('support_groups');
    }
};
