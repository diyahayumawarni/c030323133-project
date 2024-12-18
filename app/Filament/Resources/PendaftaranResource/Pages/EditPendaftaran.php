<?php

namespace App\Filament\Resources\PendaftaranResource\Pages;

use App\Filament\Resources\PendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPendaftaran extends EditRecord
{
    // Menetapkan resource yang digunakan untuk halaman ini
    protected static string $resource = PendaftaranResource::class;

    // Menambahkan aksi khusus di bagian header, seperti tombol Hapus
    protected function getHeaderActions(): array
    {
        return [
            // Menambahkan aksi untuk menghapus record
            Actions\DeleteAction::make(),
        ];
    }
}
