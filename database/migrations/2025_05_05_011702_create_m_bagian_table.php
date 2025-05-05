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
        Schema::create('m_bagian', function (Blueprint $table) {
            $table->integer('id_bagian', true);
            $table->string('kd_bagian', 7)->nullable();
            $table->string('nm_bagian', 100)->nullable();
            $table->string('kd_akun_bagian', 7)->nullable();
            $table->string('ket_bagian', 2)->nullable();
            $table->dateTime('tgl_input')->nullable();
            $table->string('user', 10)->nullable();
            $table->integer('is_del')->nullable()->default(0);
            $table->dateTime('tgl_hapus')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_bagian');
    }
};
