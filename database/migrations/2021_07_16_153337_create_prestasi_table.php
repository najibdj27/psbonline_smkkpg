<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftar_id')->constrained('pendaftar');
            $table->string('jenis_prestasi', 50)->nullable();
            $table->string('tingkat_prestasi', 50)->nullable();
            $table->string('nama_prestasi', 50)->nullable();
            $table->year('tahun')->nullable();
            $table->string('penyelenggara', 100)->nullable();
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
        Schema::dropIfExists('prestasi');
    }
}
