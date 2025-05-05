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
        Schema::create('t_cuti', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->date('tanggal')->nullable();
            $table->string('no_bukti', 13);
            $table->string('no_peg', 8)->nullable();
            $table->string('kd_unit', 8)->nullable();
            $table->string('kd_cuti', 2)->nullable();
            $table->date('tgl_awal')->nullable();
            $table->date('tgl_akhir')->nullable();
            $table->integer('lama')->nullable();
            $table->string('keterangan', 100)->nullable();
            $table->string('hari_kerja', 2)->nullable();
            $table->integer('sisa_saldo')->nullable();
            $table->string('is_del', 1)->nullable()->default('0');
            $table->string('status_approve', 1)->nullable()->default('0');
            $table->string('ip_address', 25)->nullable();
            $table->string('user', 50)->nullable();
            $table->timestamp('tgl_update')->useCurrent();
            $table->dateTime('tgl_approve')->nullable();
            $table->integer('cuti_bersama')->nullable()->default(0);

            $table->index(['no_peg', 'kd_unit', 'no_bukti'], 'no_bukti');
            $table->primary(['id', 'no_bukti']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_cuti');
    }
};
