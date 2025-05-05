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
        Schema::create('m_pass', function (Blueprint $table) {
            $table->double('id');
            $table->string('nama', 100)->nullable();
            $table->string('user_name', 10)->nullable();
            $table->string('no_pph', 7)->nullable();
            $table->string('pass', 100)->nullable();
            $table->string('status', 2)->default('0');
            $table->string('status_level1', 1)->default('0');
            $table->string('status_level2', 1)->default('0');
            $table->string('status_admin_pbb1', 2)->nullable()->default('0');
            $table->string('status_admin_pbb2', 2)->nullable()->default('0');
            $table->string('status_lembur', 1)->nullable()->default('0');
            $table->string('status_asset', 1)->nullable()->default('0');
            $table->string('status_kpi', 1)->nullable()->default('0');
            $table->string('status_entritt', 1)->nullable()->default('0');
            $table->string('pass_slip', 6)->nullable()->default('0X0X0X');
            $table->string('pass_slip_awal', 6)->nullable()->default('XXXXXX');
            $table->string('kdunit', 6)->nullable();
            $table->string('kd_gudang', 5)->nullable();
            $table->string('ip_vpn', 25)->nullable();
            $table->string('kd_sdm', 4)->nullable();
            $table->string('kd_asset', 5)->nullable();
            $table->string('kd_akun', 5)->nullable()->comment('kd_akun asset');
            $table->string('kd_cab', 5)->nullable()->comment('cabang SP');
            $table->string('kd_od', 1)->nullable()->default('-');
            $table->string('user_id', 35)->nullable();
            $table->string('ip_address', 25)->nullable();
            $table->timestamp('tgl_update')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_pass');
    }
};
