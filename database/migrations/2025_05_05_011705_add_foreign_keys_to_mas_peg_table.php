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
        Schema::table('mas_peg', function (Blueprint $table) {
            $table->foreign(['kd_jab'], 'kode_jab_fk')->references(['kd_jab'])->on('m_jabatan')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mas_peg', function (Blueprint $table) {
            $table->dropForeign('kode_jab_fk');
        });
    }
};
