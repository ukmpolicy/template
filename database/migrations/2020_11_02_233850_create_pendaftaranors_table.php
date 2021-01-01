<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_ors', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('nim');
            $table->string('alamat');
            $table->string('jurusan');
            $table->string('studi');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('organisasi');
            $table->string('nomor_hp');
            $table->string('email');
            $table->string('link_sosialmedia');
            $table->string('pengalaman_organisasi');
            $table->string('tujuan_masuk_policy');
            $table->string('foto');
            $table->string('bukti_pembayaran');
            $table->string('quesioner');
            $table->string('sertifikat_pkkmb');
            $table->string('sertifikat_lain')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('pendaftaran_ors');
    }
}
