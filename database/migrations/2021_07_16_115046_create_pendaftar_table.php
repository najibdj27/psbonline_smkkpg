<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

class CreatePendaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->char('NISN', 10)->unique();
            $table->char('NIK', 16)->unique();
            $table->string('nomor_seri_ijazah', 50)->unique();
            $table->string('nomor_seri_SKHUN', 20)->unique();
            $table->string('nomor_reg_akta_lahir', 20)->unique();
            $table->char('nomor_UN', 20)->unique();
            $table->string('nomor_pendaftaran', 20)->unique()->nullable();
            $table->string('asal_sekolah', 50);
            $table->char('nomor_KPS', 6)->nullable();
            $table->char('nomor_KIP', 6)->nullable();
            $table->string('gelombang_pendaftaran');
            $table->year('tahun_pendaftaran');
            $table->string('pilihan_jurusan_1');
            $table->string('pilihan_jurusan_2')->nullable();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kab_kota');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('dusun')->nullable();
            $table->char('rt', 3);
            $table->char('rw', 3);
            $table->char('kode_pos', 5);
            $table->string('jenis_tinggal');
            $table->year('angkatan')->default(new Expression('(YEAR(CURDATE()))'));
            $table->string('no_telp_rumah', 20)->nullable();
            $table->char('nomor_hp', 12);
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('pendidikan_ayah');
            $table->string('penghasilan_ayah');
            $table->year('tahun_lahir_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('pendidikan_ibu');
            $table->string('penghasilan_ibu')->change();
            $table->year('tahun_lahir_ibu');
            $table->string('nama_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('penghasilan_wali')->nullable()->change();
            $table->year('tahun_lahir_wali')->nullable();
            $table->integer('tinggi_badan');
            $table->integer('jarak_tempuh_sekolah')->nullable();
            $table->time('waktu_tempuh_sekolah')->nullable();
            $table->integer('jumlah_saudara_kandung');
            $table->integer('berat_badan');
            $table->string('status_siswa')->default('Pendaftar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar');
    }
}
