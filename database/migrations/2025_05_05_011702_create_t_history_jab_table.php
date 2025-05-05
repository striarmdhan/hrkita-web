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
        Schema::create('t_history_jab', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->date('tgl_update')->nullable();
            $table->string('no_peg', 10)->nullable();
            $table->string('kd_unit', 7)->nullable();
            $table->string('kd_jab_lama', 7)->nullable();
            $table->string('kd_jab_baru', 7)->nullable();
            $table->string('keterangan', 100)->nullable();
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
        Schema::dropIfExists('t_history_jab');
    }
};
