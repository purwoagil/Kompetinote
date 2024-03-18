<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kompetisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kompetisi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Add')->nullable();
            $table->unsignedBigInteger('Nim');
            $table->string('NamaMhs', 100);
            $table->unsignedBigInteger('IdKeg');
            $table->string('NamaKeg', 100);
            $table->unsignedBigInteger('Nim_Ketua')->nullable();
            $table->string('Nama_Ketua', 100)->nullable();
            $table->unsignedBigInteger('Nim_Anggota')->nullable();
            $table->string('Anggota', 500)->nullable();
            $table->string('Jenis_kepesertaan', 50);
            $table->string('Kategori', 50);
            $table->string('Tingkat', 30);
            $table->date('Tanggal_mulai');
            $table->date('Tanggal_selesai')->nullable();
            $table->unsignedSmallInteger('Tahun');
            $table->string('TglDaftar', 100);
            $table->unsignedTinyInteger('Jumlah_peserta');
            $table->string('Capaian', 20);
            $table->string('Jenis_kegiatan', 100);
            $table->string('Dokumen_Pendukung', 100);
            $table->string('Foto', 100);
            $table->string('URL', 100);
            $table->string('Dokumen_Lain', 100);
            $table->string('Dosbing', 100);
            $table->string('NIK_Dosbing', 10);
            $table->string('Surat_Dosbing', 255)->nullable();
            $table->string('CreatedBy', 50);
            $table->string('UpdatedBy', 50);
            $table->string('Status', 100);
            $table->string('Keterangan', 100)->nullable();
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
        Schema::dropIfExists('Kompetisi');
    }
}
