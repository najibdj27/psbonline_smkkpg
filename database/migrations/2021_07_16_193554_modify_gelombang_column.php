<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyGelombangColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendaftar', function (Blueprint $table){
            $table->string('gelombang_pendaftaran')->default('Gelombang I')->change();
            $table->string('pilihan_jurusan_1')->default('TKJ')->change();
            $table->dropColumn('tahun_pendaftaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
