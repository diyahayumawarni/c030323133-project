<?php

namespace App\Filament\Resources\NotifikasiResource\Pages;

use App\Filament\Resources\NotifikasiResource;
use Filament\Actions;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Pages\CreateRecord;
class CreateNotifikasi extends CreateRecord
{
    protected static string $resource = NotifikasiResource::class;

    /**
     * Mendefinisikan form schema untuk halaman CreateNotifikasi
     */
    protected function getFormSchema(): array
    {
        return [
            TextInput::make('judul')
                ->label('Judul Notifikasi') // Label untuk input judul
                ->required() // Field wajib diisi
                ->maxLength(255), // Maksimal 255 karakter

            Textarea::make('pesan')
                ->label('Pesan Notifikasi') // Label untuk input pesan
                ->required() // Field wajib diisi
                ->maxLength(1000), // Maksimal 1000 karakter

            DatePicker::make('tanggal_pemberitahuan')
                ->label('Tanggal Pemberitahuan') // Label untuk tanggal pemberitahuan
                ->required(), // Field wajib diisi
        ];
    }

    /**
     * Mendefinisikan header actions seperti tombol Save dan Cancel
     */
    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}