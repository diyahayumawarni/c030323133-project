<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    // Tetapkan resource terkait dengan halaman ini
    protected static string $resource = UserResource::class;

    protected function getRedirectUrl(): string
    {
        // Gunakan Filament untuk mendapatkan URL index resource secara otomatis
        return $this->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            // Tambahkan tindakan khusus di sini jika diperlukan
        ];
    }
}