<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    // Nama tabel (opsional, jika menggunakan konvensi Laravel ini tidak diperlukan)
    protected $table = 'pendaftarans';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'user_id',
        'beasiswa_id',
        'tanggal_daftar',
        'status_verifikasi', // ENUM: 'pending', 'diterima', 'ditolak'
    ];

    // Cast untuk tipe data ENUM
    protected $casts = [
        'tanggal_daftar' => 'date',
        'status_verifikasi' => 'string',
    ];

    // Relasi ke tabel users
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke tabel beasiswas
    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class, 'beasiswa_id');
    }
}
