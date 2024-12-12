<?php

namespace App\Filament\Resources\ReviewPendaftaranResource\Pages;

use App\Filament\Resources\ReviewPendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReviewPendaftaran extends EditRecord
{
    // Menetapkan resource yang digunakan untuk halaman ini
    protected static string $resource = ReviewPendaftaranResource::class;

    // Menambahkan aksi khusus di bagian header, seperti tombol Hapus
    protected function getHeaderActions(): array
    {
        return [
            // Menambahkan aksi default untuk menghapus record
            Actions\DeleteAction::make(),
        ];
    }

    // Anda bisa menambahkan custom logic untuk pengalihan setelah sukses mengedit
    protected function getRedirectUrl(): string
    {
        // Setelah berhasil mengedit, arahkan kembali ke halaman daftar ReviewPendaftaran
        return route('filament.resources.review-pendaftarans.index');
    }
}