<?php

namespace App\Filament\Resources\DokumenPendukungResource\Pages;

use App\Filament\Resources\DokumenPendukungResource; // Mengimpor resource terkait
use Filament\Pages\Actions; // Mengimpor aksi untuk halaman
use Filament\Resources\Pages\EditRecord; // Mengimpor kelas untuk halaman edit record

class EditDokumenPendukung extends EditRecord
{
    /**
     * Menentukan resource yang terkait dengan halaman ini.
     */
    protected static string $resource = DokumenPendukungResource::class;

    /**
     * Menambahkan aksi di bagian header, seperti tombol hapus.
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(), // Menambahkan aksi untuk menghapus record
        ];
    }
}
