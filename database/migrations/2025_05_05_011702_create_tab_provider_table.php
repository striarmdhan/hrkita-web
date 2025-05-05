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
        Schema::create('tab_provider', function (Blueprint $table) {
            $table->increments('ID_PANITIA');
            $table->string('KETERANGAN', 50)->nullable();
            $table->string('HAPUS', 1)->nullable()->default('0');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tab_provider');
    }
};
