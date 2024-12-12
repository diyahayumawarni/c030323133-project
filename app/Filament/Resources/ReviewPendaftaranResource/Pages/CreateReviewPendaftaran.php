<?php

namespace App\Filament\Resources\ReviewPendaftaranResource\Pages;

use App\Filament\Resources\ReviewPendaftaranResource;
use Filament\Resources\Pages\CreateRecord;

class CreateReviewPendaftaran extends CreateRecord
{
    // Menetapkan resource yang digunakan untuk halaman ini
    protected static string $resource = ReviewPendaftaranResource::class;

    protected function getRedirectUrl(): string
    {
        // Setelah berhasil membuat record baru, alihkan ke halaman index resource
        return $this->getResource()::getUrl('index');
    }
}