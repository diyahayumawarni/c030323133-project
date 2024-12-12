<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    // Menetapkan resource yang akan digunakan untuk halaman ini
    protected static string $resource = UserResource::class;

    // Menambahkan aksi header seperti tombol untuk membuat user baru
    protected function getHeaderActions(): array
    {
        return [
            // Aksi untuk membuat user baru
            Actions\CreateAction::make(),
        ];
    }

    // Anda bisa menambahkan metode untuk custom behavior jika diperlukan
    // Misalnya, untuk pengaturan kolom atau pengurutan
    protected function getTableActions(): array
    {
        return [
            // Anda bisa menambahkan aksi lain untuk tiap baris, seperti melihat atau mengedit
            Actions\ViewAction::make(),
            Actions\EditAction::make(),
        ];
    }
}