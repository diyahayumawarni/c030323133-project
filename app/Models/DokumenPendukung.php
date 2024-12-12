<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenPendukung extends Model
{
    use HasFactory;

    protected $fillable = ['pendaftaran_id', 'nama_dokumen', 'file_path', 'status_verifikasi'];

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class);
    }
}