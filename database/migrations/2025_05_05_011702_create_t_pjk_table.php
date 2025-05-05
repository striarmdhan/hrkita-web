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
        Schema::create('t_pjk', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->date('TGL_PJK')->nullable();
            $table->string('BUKTI_PJK', 11)->nullable();
            $table->string('BUKTI', 11)->nullable();
            $table->string('BUKTI_PPL', 15)->nullable()->default('-')->comment('PPLSDM');
            $table->string('BUKTI_UMUM', 15)->nullable()->default('-')->comment('PPLUMUM');
            $table->string('NO_PEG', 7)->nullable();
            $table->string('UNIT', 4)->nullable();
            $table->string('TK_JABATAN', 5)->nullable();
            $table->string('TUJUAN', 50)->nullable();
            $table->string('BEBAN', 4)->nullable()->comment('ka');
            $table->string('KA', 4)->nullable()->default('-')->comment('bb');
            $table->string('UNIT_ASLI', 4)->nullable();
            $table->string('KEPERLUAN', 10)->nullable();
            $table->string('AKOMODASI', 7)->nullable();
            $table->string('KENDARAAN', 1)->nullable();
            $table->string('BEBAN_BIAY', 4)->nullable();
            $table->date('AWAL_TUGAS')->nullable();
            $table->string('JAM_AWAL', 8)->nullable();
            $table->string('JAM_AKHIR', 8)->nullable();
            $table->date('AKIR_TUGAS')->nullable();
            $table->string('KHUSUS', 1)->nullable();
            $table->double('U_PJK')->nullable()->default(0);
            $table->double('PJK_TIKET')->nullable()->default(0);
            $table->double('PJK_HOTEL')->nullable()->default(0);
            $table->double('PJK_TOL')->nullable()->default(0);
            $table->double('PJK_TAXI')->nullable()->default(0);
            $table->double('PJK_BBM')->nullable()->default(0);
            $table->double('PJK_LAIN')->nullable()->default(0);
            $table->double('PJK_HARIAN')->nullable()->default(0);
            $table->double('PJK_INAP')->nullable()->default(0);
            $table->integer('JM_INAP')->nullable()->default(0);
            $table->double('PERSEN_INAP')->nullable()->default(100);
            $table->string('KET_INAP', 10)->nullable();
            $table->string('HTL_BINTANG', 1)->nullable();
            $table->double('SAT_RUPIAH')->nullable()->default(0);
            $table->double('SAT_DOLAR')->nullable()->default(0);
            $table->string('KD_GRNEG', 1)->nullable();
            $table->string('KD_NEG', 2)->nullable();
            $table->string('APPROVE_SDM', 1)->nullable()->default('0');
            $table->string('APPROVE_ATASAN', 1)->nullable()->default('0');
            $table->string('USER_APPROVE', 8)->nullable();
            $table->string('HAPUS', 1)->nullable()->default('0');
            $table->string('JNS_SPPD', 10)->nullable();
            $table->string('KD_PPU', 1)->nullable()->default('0');
            $table->string('FLAG_PPL', 1)->nullable()->default('0');
            $table->string('IP', 15)->nullable();
            $table->string('USER_ID', 15)->nullable();
            $table->timestamp('TGL_UPDATE')->useCurrent();
            $table->integer('KET_KAS')->nullable()->default(1)->comment('1=pusat;2=unit');

            $table->index(['BUKTI', 'BUKTI_PJK'], 'no_peg');
            $table->index(['TGL_PJK', 'HAPUS'], 'tgl');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pjk');
    }
};
