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
        Schema::create('t_finger_mobile', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('kode', 15)->nullable();
            $table->string('no_peg', 7)->nullable();
            $table->string('hari', 6)->nullable();
            $table->date('tanggal')->nullable();
            $table->time('shift_time_in')->nullable()->default('07:30:00');
            $table->time('shift_time_out')->nullable()->default('16:30:00');
            $table->time('masuk')->nullable();
            $table->time('keluar')->nullable();
            $table->time('terlambat')->nullable();
            $table->time('plg_cepat')->nullable();
            $table->time('lembur')->nullable();
            $table->string('ket', 50)->nullable();
            $table->string('latitude', 200)->nullable();
            $table->string('longitude', 200)->nullable();
            $table->timestamp('tgl_update')->useCurrent();
            $table->string('ip_address_in', 50)->nullable();
            $table->string('ip_address_out', 50)->nullable();
            $table->string('lat_lon_in', 200)->nullable();
            $table->string('lat_lon_out', 200)->nullable();
            $table->string('mac_address_in', 100)->nullable();
            $table->string('mac_address_out', 100)->nullable();
            $table->text('navigator')->nullable();
            $table->string('kd_kantor_in', 50)->nullable();
            $table->string('kd_kantor_out', 50)->nullable();

            $table->index(['kode', 'no_peg'], 'kode');
            $table->index(['no_peg', 'tanggal'], 'tgl');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_finger_mobile');
    }
};
