<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftaran_id')->constrained('pendaftarans')->onDelete('cascade');
            $table->foreignId('reviewer_id')->constrained('users')->onDelete('cascade');
            $table->text('catatan_review')->nullable();
            $table->enum('hasil_review', ['diterima', 'ditolak'])->nullable(); // Hasil review pendaftaran
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('review');
        return new class extends migration{
            //
        };
    }
}