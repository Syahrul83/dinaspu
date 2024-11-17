<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kmps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kmps')->nullable();
            $table->integer('tahun_pendirian')->nullable();
            $table->string('nomor_akte_notaris')->nullable();
            $table->string('wilayah_operasi')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kmps');
    }
};
