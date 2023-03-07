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
        Schema::create('mitras', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->unsigned();
            $table->string('nama_mitra');
            $table->string('nama_brand');
            $table->enum('jenis_mitra', ['Maskapai', 'Hotel']);
            $table->string('nama_pemilik');
            $table->text('alamat_mitra');
            $table->string('email_mitra');
            $table->string('telp_mitra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitras');
    }
};
