<?php

namespace App\Filament\Resources\BeasiswaResource\Pages;

use App\Filament\Resources\BeasiswaResource;
use Filament\Actions;
use Filament\Actions\SaveAction;
use Filament\Actions\CancelAction;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;

class CreateBeasiswa extends CreateRecord
{
    // Tentukan resource yang digunakan pada halaman ini
    protected static string $resource = BeasiswaResource::class;

    /**
     * Mendefinisikan form schema untuk halaman ini
     */
    protected function getFormSchema(): array
    {
        return [
            // Kolom untuk memasukkan nama beasiswa
            TextInput::make('nama') // Tipe data string
                ->label('Nama Beasiswa')
                ->required()
                ->maxLength(255),

            // Kolom untuk memasukkan deskripsi beasiswa
            Textarea::make('deskripsi') // Tipe data string
                ->label('Deskripsi Beasiswa')
                ->required()
                ->maxLength(1000),

            // Kolom untuk memilih status beasiswa
            Select::make('status') // Tipe data enum
                ->label('Status Beasiswa')
                ->options([
                    'active' => 'Active',
                    'inactive' => 'Inactive',
                ])
                ->required(),

            // Kolom untuk memasukkan jumlah penerima beasiswa
            TextInput::make('jumlah_penerima') // Tipe data integer
                ->label('Jumlah Penerima')
                ->required()
                ->numeric() // Hanya memperbolehkan angka
                ->minValue(1) // Pastikan minimum value diatur jika perlu
                ->maxValue(1000), // Bisa ditambahkan batasan maksimal

            // Kolom untuk memilih tanggal mulai beasiswa
            DatePicker::make('tanggal_mulai') // Tipe data datetime
                ->label('Tanggal Mulai')
                ->required(),

            // Kolom untuk memilih tanggal akhir beasiswa
            DatePicker::make('tanggal_akhir') // Tipe data datetime
                ->label('Tanggal Akhir')
                ->required(),
        ];
    }

    /**
     * Menambahkan aksi di bagian header (misalnya tombol simpan dan batal)
     */
    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}