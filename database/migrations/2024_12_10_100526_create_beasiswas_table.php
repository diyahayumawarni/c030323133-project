<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeasiswasTable extends Migration
{
    public function up()
    {
        Schema::create('beasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_beasiswa', 150);
            $table->text('deskripsi');
            $table->integer('kuota')->unsigned(); // Kuota penerima beasiswa
            $table->date('batas_pendaftaran'); // Deadline pendaftaran
            $table->decimal('ipk_minimum', 3, 2)->nullable(); // Syarat IPK minimum
            $table->integer('usia_maximum')->nullable(); // Syarat usia maksimum
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('beasiswas');

        Schema::table('beasiswas', function (Blueprint $table) {
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
        });
        
    }
}