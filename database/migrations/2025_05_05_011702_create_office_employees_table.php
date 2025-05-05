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
        Schema::create('office_employees', function (Blueprint $table) {
            $table->integer('id_office', true);
            $table->string('kd_kantor', 7)->nullable();
            $table->string('no_peg', 7)->nullable();
            $table->string('na_peg', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('office_employees');
    }
};
