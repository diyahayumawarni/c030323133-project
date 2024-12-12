<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewPendaftaran extends Model
{
    use HasFactory;

    /**
     * Tabel terkait dengan model ini.
     */
    protected $table = 'review';

    /**
     * Kolom yang dapat diisi secara mass-assignment.
     */
    protected $fillable = [
        'pendaftaran_id',
        'reviewer_id',
        'catatan_review',
        'hasil_review',
    ];

    /**
     * Relasi ke tabel pendaftaran.
     */
    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'pendaftaran_id');
    }

    /**
     * Relasi ke tabel pengguna (reviewer).
     */
    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }
}
