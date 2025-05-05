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
        Schema::create('m_unit', function (Blueprint $table) {
            $table->integer('id_unit', true)->unique('id_unit');
            $table->string('kd_bagian', 7)->nullable();
            $table->string('kd_unit', 7);
            $table->string('kd_grup', 7)->nullable();
            $table->string('kd_kpp', 7)->nullable();
            $table->string('nm_unit', 100)->nullable();
            $table->string('kd_akun_unit', 7)->nullable();
            $table->string('kd_beban', 7)->nullable();
            $table->integer('hari_kerja')->nullable()->default(5);
            $table->integer('flag_kupon')->nullable()->default(0);
            $table->dateTime('tgl_input')->nullable();
            $table->string('user', 7)->nullable();
            $table->dateTime('tgl_hapus')->nullable();
            $table->integer('is_del')->nullable()->default(0);
            $table->integer('kd_area')->nullable()->default(0)->comment('1=kantorpusat');
            $table->string('kd_pengurus', 2)->nullable()->default('01');
            $table->double('jm_umk')->nullable()->default(0);
            $table->string('kd_kantor', 7)->nullable()->default('K0001');

            $table->primary(['id_unit', 'kd_unit']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_unit');
    }
};
