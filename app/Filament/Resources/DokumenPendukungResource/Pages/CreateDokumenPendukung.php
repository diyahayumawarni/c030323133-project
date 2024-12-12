<?php

namespace App\Filament\Resources\DokumenPendukungResource\Pages;

use App\Filament\Resources\DokumenPendukungResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDokumenPendukung extends CreateRecord
{
    protected static string $resource = DokumenPendukungResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        // Tentukan URL pengalihan setelah data berhasil dibuat
        return $this->getResource()::getUrl('index');
    }
}