<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    // Menetapkan resource yang akan digunakan untuk halaman ini
    protected static string $resource = UserResource::class;

    // Menambahkan aksi khusus ke bagian header (misalnya, tombol Hapus)
    protected function getHeaderActions(): array
    {
        return [
            // Aksi default untuk menghapus record
            Actions\DeleteAction::make(),
        ];
    }

    // Anda juga bisa menambahkan metode lain untuk custom behavior jika diperlukan
    // Misalnya, jika Anda ingin menambahkan custom redirect atau validasi.
    protected function getRedirectUrl(): string
    {
        // Setelah berhasil mengedit, alihkan kembali ke daftar pengguna
        return route('filament.resources.users.index');
    }
}