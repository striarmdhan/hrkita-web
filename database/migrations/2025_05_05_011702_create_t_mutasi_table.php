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
        Schema::create('t_mutasi', function (Blueprint $table) {
            $table->bigInteger('id_mutasi', true);
            $table->date('tgl_mutasi')->nullable();
            $table->string('no_peg', 10)->nullable();
            $table->string('kd_unit_asal', 7)->nullable();
            $table->string('nm_unit_asal', 100)->nullable();
            $table->string('kd_unit_tujuan', 7)->nullable();
            $table->string('nm_unit_tujuan', 100)->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamp('tgl_input')->useCurrent();
            $table->string('user', 10)->nullable();
            $table->integer('is_del')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_mutasi');
    }
};
