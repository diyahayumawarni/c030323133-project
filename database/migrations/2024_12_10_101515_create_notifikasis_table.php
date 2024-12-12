<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifikasisTable extends Migration
{
    public function up()
    {
        Schema::create('notifikasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('judul', 255);
            $table->text('pesan');
            $table->enum('status', ['dibaca', 'belum_dibaca'])->default('belum_dibaca');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifikasis');
    }
}