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
        Schema::create('saldo_cuti', function (Blueprint $table) {
            $table->string('no_peg', 10)->nullable();
            $table->integer('saldo_cuti')->nullable()->default(12);
            $table->integer('saldo_cuti_besar')->nullable()->default(0);
            $table->integer('cuti')->nullable()->default(0);
            $table->integer('batal')->nullable()->default(0);
            $table->date('tgl_exp_ctb')->nullable();
            $table->date('tgl_exp_ct')->nullable();
            $table->timestamp('tgl_update')->useCurrent();
            $table->string('user', 7)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saldo_cuti');
    }
};
