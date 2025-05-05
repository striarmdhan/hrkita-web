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
        Schema::create('m_jabatan', function (Blueprint $table) {
            $table->integer('id_jab', true);
            $table->string('kd_jab', 7)->unique('kdjab');
            $table->string('nm_jab', 100)->nullable();
            $table->double('tj_jab')->nullable()->default(0);
            $table->dateTime('tgl_input')->nullable();
            $table->string('user', 7)->nullable();
            $table->dateTime('tgl_hapus')->nullable();
            $table->integer('is_del')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_jabatan');
    }
};
