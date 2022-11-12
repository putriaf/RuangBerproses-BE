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
        Schema::create('psytalks', function (Blueprint $table) {
            $table->id();
            $table->string('topik');
            $table->string('pembicara');
            $table->string('tanggal');
            $table->string('waktu');
            $table->string('biaya');
            $table->string('poster');
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
        Schema::dropIfExists('psytalks');
    }
};