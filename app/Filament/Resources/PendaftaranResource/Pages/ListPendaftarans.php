<?php

namespace App\Filament\Resources\PendaftaranResource\Pages;

use App\Filament\Resources\PendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables; // Pastikan untuk menambahkan ini untuk mendeklarasikan tipe kolom
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class ListPendaftarans extends ListRecords
{
    // Menetapkan resource yang digunakan untuk halaman ini
    protected static string $resource = PendaftaranResource::class;

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
            // Menampilkan nama dari pendaftaran dengan tipe data string
            TextColumn::make('nama')
                ->sortable()  // Menambahkan kemampuan untuk menyortir berdasarkan kolom ini
                ->searchable(), // Menambahkan kemampuan pencarian berdasarkan kolom ini

            // Menampilkan status pendaftaran dengan tipe data string
            TextColumn::make('status')
                ->sortable(), // Menambahkan kemampuan untuk menyortir berdasarkan kolom ini

            // Menampilkan tanggal pendaftaran dengan tipe data datetime
            TextColumn::make('created_at')
                ->date() // Mengonversi data ke format tanggal
                ->sortable(), // Menambahkan kemampuan untuk menyortir berdasarkan kolom ini

            // Menambahkan kolom untuk status pendaftaran dengan tipe data enum
            BadgeColumn::make('status')
                ->enum([
                    'approved' => 'Approved',
                    'pending' => 'Pending',
                    'rejected' => 'Rejected',
                ])
                ->colors(['success', 'warning', 'danger']), // Menambahkan warna untuk setiap status
        ];
    }
}