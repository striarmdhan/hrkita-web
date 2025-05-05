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
        Schema::create('m_kantor', function (Blueprint $table) {
            $table->integer('id_kantor', true)->unique('id_kantor');
            $table->string('kd_kantor', 7);
            $table->string('nm_kantor', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->string('telp', 25)->nullable();
            $table->string('koordinat_kantor', 100)->nullable();
            $table->double('radius')->nullable()->default(100);
            $table->string('created_by', 7)->nullable();
            $table->dateTime('created_date')->nullable();

            $table->primary(['id_kantor', 'kd_kantor']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_kantor');
    }
};
