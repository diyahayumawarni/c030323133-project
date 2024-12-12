<?php

namespace App\Filament\Resources\NotifikasiResource\Pages;

use App\Filament\Resources\NotifikasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNotifikasi extends EditRecord
{
    // Menetapkan resource yang digunakan untuk halaman ini
    protected static string $resource = NotifikasiResource::class;

    // Menambahkan aksi khusus di bagian header, seperti tombol Hapus
    protected function getHeaderActions(): array
    {
        return [
            // Menambahkan aksi untuk menghapus record
            Actions\DeleteAction::make(),
        ];
    }

    // Mengalihkan pengguna ke halaman daftar setelah berhasil mengedit
    protected function getRedirectUrl(): string
    {
        // Setelah berhasil mengedit, arahkan kembali ke halaman daftar Notifikasi
        return route('filament.resources.notifikasis.index');
    }
}