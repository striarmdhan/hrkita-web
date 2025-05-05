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
        Schema::create('t_sppd', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->date('TANGGAL')->nullable();
            $table->string('BUKTI', 11)->nullable();
            $table->string('STS_PJK', 1)->nullable()->default('0');
            $table->string('NO_PEG', 7)->nullable();
            $table->string('UNIT', 4)->nullable();
            $table->string('TK_JABATAN', 5)->nullable();
            $table->string('TUJUAN', 20)->nullable();
            $table->string('DALAM_RANGKA', 90)->nullable();
            $table->string('BEBAN', 4)->nullable();
            $table->string('UNIT_ASLI', 4)->nullable();
            $table->string('KEPERLUAN', 10)->nullable();
            $table->string('AKOMODASI', 1)->nullable()->default('2');
            $table->string('KENDARAAN', 1)->nullable();
            $table->date('TGL_AWAL')->nullable();
            $table->date('TGL_AKHIR')->nullable();
            $table->string('KHUSUS', 1)->nullable()->default('0');
            $table->double('U_MUKA')->nullable()->default(0);
            $table->double('TIKET')->nullable()->default(0);
            $table->double('HOTEL')->nullable()->default(0);
            $table->double('LAIN_LAIN')->nullable()->default(0);
            $table->double('U_HARIAN')->nullable()->default(0);
            $table->double('U_INAP')->nullable()->default(0);
            $table->string('APPROVE', 1)->nullable()->default('0');
            $table->string('HAPUS', 1)->nullable()->default('0');
            $table->string('JNS_SPPD', 10)->nullable()->default('DINAS');
            $table->string('IP', 15)->nullable();
            $table->string('USER_ID', 15)->nullable();
            $table->timestamp('TGL_UPDATE')->useCurrent();

            $table->index(['BUKTI', 'NO_PEG', 'UNIT'], 'bukti');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_sppd');
    }
};
