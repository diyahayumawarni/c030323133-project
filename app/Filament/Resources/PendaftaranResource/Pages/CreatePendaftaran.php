<?php

namespace App\Filament\Resources\PendaftaranResource\Pages;

use App\Filament\Resources\PendaftaranResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;


class CreatePendaftaran extends CreateRecord
{
    // Menetapkan resource terkait dengan halaman ini
    protected static string $resource = PendaftaranResource::class;

    /**
     * Mendefinisikan form schema untuk halaman ini
     */
    protected function getFormSchema(): array
    {
        return [
            // Kolom untuk memilih user
            Select::make('user_id')
                ->label('Pilih Pengguna')
                ->options(function () {
                    return \App\Models\User::all()->pluck('name', 'id'); // Mengambil nama pengguna untuk pilihan
                })
                ->required() // Memastikan kolom ini wajib diisi
                ->placeholder('Pilih pengguna'),

            // Kolom untuk memilih beasiswa
            Select::make('beasiswa_id')
                ->label('Pilih Beasiswa')
                ->options(function () {
                    return \App\Models\Beasiswa::all()->pluck('nama', 'id'); // Mengambil nama beasiswa untuk pilihan
                })
                ->required() // Memastikan kolom ini wajib diisi
                ->placeholder('Pilih beasiswa'),

            // Kolom untuk memasukkan tanggal pendaftaran
            DatePicker::make('tanggal_daftar')
                ->label('Tanggal Pendaftaran')
                ->required() // Memastikan kolom ini wajib diisi
                ->default(now()) // Defaultkan ke tanggal sekarang
                ->placeholder('Pilih tanggal pendaftaran'),

            // Kolom untuk memilih status pendaftaran
            Select::make('status')
                ->label('Status Pendaftaran')
                ->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'rejected' => 'Rejected',
                ])
                ->required() // Memastikan kolom ini wajib diisi
                ->placeholder('Pilih status pendaftaran'),

            // Kolom untuk memasukkan nama lengkap
            TextInput::make('nama_lengkap')
                ->label('Nama Lengkap')
                ->required()
                ->maxLength(255)
                ->placeholder('Masukkan nama lengkap'),

            // Kolom untuk memasukkan alamat
            TextArea::make('alamat')
                ->label('Alamat')
                ->required()
                ->maxLength(500)
                ->placeholder('Masukkan alamat lengkap'),

            // Kolom untuk memasukkan nomor telepon
            TextInput::make('nomor_telepon')
                ->label('Nomor Telepon')
                ->required()
                ->maxLength(15)
                ->numeric()
                ->placeholder('Masukkan nomor telepon'),

            // Kolom untuk memasukkan email
            TextInput::make('email')
                ->label('Email')
                ->required()
                ->email()
                ->maxLength(255)
                ->placeholder('Masukkan email'),
        ];
    }

    /**
     * Menambahkan aksi di bagian header (misalnya tombol simpan dan batal)
     */

    /**
     * Mengalihkan pengguna ke halaman daftar setelah berhasil menyimpan
     */
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // Mengarahkan ke halaman daftar setelah menyimpan
    }
}