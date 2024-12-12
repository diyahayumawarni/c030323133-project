<?php

namespace App\Filament\Resources\NotifikasiResource\Pages;

use App\Filament\Resources\NotifikasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables; // Pastikan untuk menambahkan ini untuk mendeklarasikan tipe kolom
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class ListNotifikasis extends ListRecords
{
    // Menetapkan resource yang digunakan untuk halaman ini
    protected static string $resource = NotifikasiResource::class;

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
            // Menampilkan judul notifikasi dengan tipe data string
            TextColumn::make('judul')
                ->sortable()  // Menambahkan kemampuan untuk menyortir berdasarkan kolom ini
                ->searchable(), // Menambahkan kemampuan pencarian berdasarkan kolom ini

            // Menampilkan pesan notifikasi dengan tipe data string
            TextColumn::make('pesan')
                ->sortable(), // Menambahkan kemampuan untuk menyortir berdasarkan kolom ini

            // Menampilkan tanggal pemberitahuan dengan tipe data datetime
            TextColumn::make('tanggal_pemberitahuan')
                ->date() // Mengonversi data ke format tanggal
                ->sortable(), // Menambahkan kemampuan untuk menyortir berdasarkan kolom ini

            // Menambahkan kolom untuk status notifikasi dengan tipe data enum (bisa ditambahkan jika perlu)
            BadgeColumn::make('status')
                ->enum([
                    'sent' => 'Sent',
                    'pending' => 'Pending',
                    'failed' => 'Failed',
                ])
                ->colors(['success', 'warning', 'danger']), // Menambahkan warna untuk setiap status
        ];
    }
}