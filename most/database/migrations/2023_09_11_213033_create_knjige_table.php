<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('knjige', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->unsignedBigInteger('pisac_id');
            $table->unsignedBigInteger('zanr_id');
            $table->timestamps();

            $table->foreign('pisac_id')->references('id')->on('pisci');
            $table->foreign('zanr_id')->references('id')->on('zanr');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('knjige');
    }
};

