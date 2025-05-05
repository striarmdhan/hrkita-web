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
        Schema::create('mas_peg', function (Blueprint $table) {
            $table->bigInteger('id_pegawai', true);
            $table->string('no_peg', 10)->nullable()->index('no_peg');
            $table->string('no_pph', 15)->nullable();
            $table->string('na_peg', 100)->nullable()->index('napeg');
            $table->text('alamat')->nullable();
            $table->text('alamat_dms')->nullable();
            $table->string('tmpt_lahir', 50)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->date('tgl_dinas')->nullable();
            $table->string('sex', 2)->nullable()->default('L');
            $table->string('kd_jab', 7)->nullable()->index('kd_jab');
            $table->string('kd_golongan', 7)->nullable();
            $table->string('status_peg', 5)->nullable();
            $table->string('kd_unit', 7)->nullable();
            $table->string('pendidikan', 7)->nullable();
            $table->string('ket_pendidikan', 100)->nullable();
            $table->string('kd_job', 7)->nullable();
            $table->string('bank', 50)->nullable()->default('MANDIRI');
            $table->string('no_rek', 50)->nullable();
            $table->string('no_ktp', 50)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('no_hp', 25)->nullable();
            $table->string('nm_ibu', 100)->nullable();
            $table->string('npwp', 50)->nullable();
            $table->string('agama', 10)->nullable()->default('ISLAM');
            $table->string('kawin', 5)->nullable()->default('TK/0');
            $table->string('status_pajak', 5)->nullable()->default('TK/0');
            $table->string('id_finger', 25)->nullable();
            $table->string('rek_bni', 50)->nullable();
            $table->string('rek_car', 50)->nullable();
            $table->string('rek_sinarmas', 50)->nullable();
            $table->integer('flag_keluar')->nullable()->default(0)->index('keluar');
            $table->date('tgl_keluar')->nullable();
            $table->date('tgl_kontrak')->nullable();
            $table->date('tgl_akhir')->nullable();
            $table->string('no_kpj', 15)->nullable();
            $table->string('no_kk', 50)->nullable();
            $table->dateTime('tgl_update')->nullable();
            $table->string('user', 8)->nullable();
            $table->integer('is_del')->nullable()->default(0);
            $table->dateTime('tgl_hapus')->nullable();
            $table->integer('flag_gaji_pusat')->nullable()->default(0);
            $table->integer('flag_bpjs')->nullable()->default(0);
            $table->integer('flag_ip')->nullable()->default(0);
            $table->integer('ganti_badge')->nullable()->default(0);
            $table->string('no_peg_lm', 10)->nullable();
            $table->integer('flag_kis')->nullable()->default(0)->comment('kartu indonesia sehat');
            $table->string('MAC_ADDRESS', 30)->nullable();
            $table->string('NOTIF_EMAIL', 150)->nullable();
            $table->string('ID_SENDER_ANDROID', 150)->nullable();
            $table->integer('bpjs_unit')->nullable()->default(0)->comment('0=umk gresik;1=umk unit');
            $table->integer('flag_shift')->nullable()->default(0);

            $table->index(['kd_golongan', 'status_peg', 'kd_unit'], 'unit_gol_jab');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mas_peg');
    }
};
