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
        Schema::create('professional_counselings', function (Blueprint $table) {
            $table->id();
            $table->string('counselor_id')->constrained('counselors');
            $table->string('tanggal')->nullable();
            $table->string('waktu')->nullable();
            $table->string('biaya');
            $table->string('link_event')->nullable();
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
        Schema::dropIfExists('professional_counselings');
    }
};