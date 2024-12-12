<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumenPendukungsTable extends Migration
{
    public function up()
    {
        Schema::create('dokumen_pendukungs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftaran_id')->constrained('pendaftarans')->onDelete('cascade');
            $table->string('nama_dokumen', 100);
            $table->string('file_path'); // Lokasi file yang diunggah
            $table->enum('status_verifikasi', ['belum', 'sudah'])->default('belum');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dokumen_pendukungs');
    }
}