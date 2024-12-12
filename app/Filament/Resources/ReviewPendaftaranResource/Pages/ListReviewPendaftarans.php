<?php

namespace App\Filament\Resources\ReviewPendaftaranResource\Pages;

use App\Filament\Resources\ReviewPendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReviewPendaftarans extends ListRecords
{
    // Menetapkan resource yang digunakan untuk halaman ini
    protected static string $resource = ReviewPendaftaranResource::class;

    // Menambahkan aksi di bagian header, seperti tombol untuk membuat entri baru
    protected function getHeaderActions(): array
    {
        return [
            // Menambahkan tombol "Create" untuk membuat entri baru
            Actions\CreateAction::make(),
        ];
    }

    // Anda juga bisa menambahkan aksi kustom atau pengaturan khusus
    // Misalnya, menambahkan aksi di setiap baris atau mengonfigurasi kolom di tabel
    protected function getTableActions(): array
    {
        return [
            // Menambahkan aksi untuk melihat atau mengedit setiap entri
            Actions\ViewAction::make(),
            Actions\EditAction::make(),
        ];
    }
}