<?php

namespace App\Filament\Resources\BeasiswaResource\Pages;

use App\Filament\Resources\BeasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables; // Pastikan untuk mengimpor komponen tabel yang diperlukan
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;

class ListBeasiswas extends ListRecords
{
    protected static string $resource = BeasiswaResource::class;

    // Menambahkan aksi di bagian header, seperti tombol untuk membuat entri baru
    protected function getHeaderActions(): array
    {
        return [
            // Menambahkan tombol "Create" untuk membuat entri baru
            Actions\CreateAction::make(),
        ];
    }

    // Menambahkan aksi untuk setiap baris di tabel, misalnya tombol untuk melihat atau mengedit setiap entri
    protected function getTableActions(): array
    {
        return [
            // Menambahkan aksi untuk melihat atau mengedit entri di tabel
            Actions\ViewAction::make(),
            Actions\EditAction::make(),
        ];
    }

    // Menambahkan kolom-kolom yang akan ditampilkan di tabel
    protected function getTableColumns(): array
    {
        return [
            // Menampilkan nama beasiswa
            TextColumn::make('nama')
                ->sortable()  // Menambahkan kemampuan untuk menyortir berdasarkan kolom ini
                ->searchable(), // Menambahkan kemampuan pencarian berdasarkan kolom ini

            // Menampilkan jumlah penerima beasiswa
            TextColumn::make('jumlah_penerima')
                ->sortable()  // Menambahkan kemampuan untuk menyortir berdasarkan kolom ini
                ->label('Jumlah Penerima'),

            // Menampilkan status beasiswa dengan tipe data enum
            BadgeColumn::make('status')
                ->enum([
                    'active' => 'Active',
                    'inactive' => 'Inactive',
                ])
                ->colors(['success', 'danger']), // Menambahkan warna untuk setiap status

            // Menampilkan gambar terkait beasiswa jika ada
            ImageColumn::make('image')
                ->label('Image')
                ->width(50)
                ->height(50)
                ->sortable(), // Menambahkan kemampuan untuk menyortir berdasarkan kolom ini

            // Menampilkan tanggal dibuatnya beasiswa
            TextColumn::make('created_at')
                ->date()  // Mengonversi data ke format tanggal
                ->sortable(), // Menambahkan kemampuan untuk menyortir berdasarkan kolom ini
        ];
    }
}