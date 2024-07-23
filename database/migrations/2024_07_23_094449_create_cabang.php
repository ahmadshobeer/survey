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
        Schema::create('m_cabang', function (Blueprint $table) {
            $table->string('kd_cabang',25)->primary();
            $table->string('nama_cabang',100);
            $table->string('alamat',100);
            $table->string('telp',25);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_cabang');
    }
};
