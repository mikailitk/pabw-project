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
        Schema::table('kursis', function(Blueprint $table){
            $table->foreign('id_tempat_asal')->references('id')->on('tempats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kursis', function(Blueprint $table){
            $table->dropForeign(['id_tempat_asal']);
        });
    }
};
