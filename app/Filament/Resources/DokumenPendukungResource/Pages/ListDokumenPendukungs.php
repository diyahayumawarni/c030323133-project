<?php

namespace App\Filament\Resources\DokumenPendukungResource\Pages;

use App\Filament\Resources\DokumenPendukungResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class ListDokumenPendukungs extends ListRecords
{
    protected static string $resource = DokumenPendukungResource::class;

    /**
     * Menambahkan aksi di bagian header, seperti tombol untuk membuat entri baru
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(), // Menambahkan tombol "Create"
        ];
    }

    /**
     * Mendefinisikan kolom-kolom yang akan ditampilkan di tabel
     */
    protected function getTableColumns(): array
    {
        return [
            // Kolom untuk menampilkan nama dokumen
            TextColumn::make('nama')
                ->label('Nama Dokumen')
                ->sortable()
                ->searchable(),

            // Kolom untuk menampilkan deskripsi dokumen
            TextColumn::make('deskripsi')
                ->label('Deskripsi')
                ->limit(50) // Membatasi panjang deskripsi yang ditampilkan
                ->sortable(),

            // Kolom untuk menampilkan status dokumen
            BadgeColumn::make('status')
                ->label('Status')
                ->enum([
                    'active' => 'Aktif',
                    'inactive' => 'Tidak Aktif',
                ])
                ->colors([
                    'active' => 'success',
                    'inactive' => 'danger',
                ]),

            // Kolom untuk menampilkan tanggal pembuatan dokumen
            TextColumn::make('created_at')
                ->label('Tanggal Dibuat')
                ->sortable()
                ->dateTime('d M Y, H:i'), // Format tanggal dan waktu
        ];
    }

    /**
     * Menambahkan aksi untuk setiap baris di tabel, seperti tombol untuk mengedit atau melihat detail
     */
    protected function getTableActions(): array
    {
        return [
            Actions\EditAction::make(), // Aksi untuk mengedit entri
            Actions\ViewAction::make(), // Aksi untuk melihat detail entri
        ];
    }
}