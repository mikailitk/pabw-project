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
        Schema::create('kursis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tempat_asal')->unsigned();
            $table->unsignedBigInteger('id_tempat_tujuan')->unsigned();
            $table->string('no_kursi');
            $table->datetime('waktu_berangkat');
            $table->datetime('waktu_sampai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursis');
    }
};


