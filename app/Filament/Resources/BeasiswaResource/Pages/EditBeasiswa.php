<?php

namespace App\Filament\Resources\BeasiswaResource\Pages;

use App\Filament\Resources\BeasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth; // Pastikan namespace Auth ditambahkan

class EditBeasiswa extends EditRecord
{
    protected static string $resource = BeasiswaResource::class;

    /**
     * Aksi tambahan di header halaman edit, seperti tombol delete.
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(), // Tombol untuk menghapus
        ];
    }

    /**
     * Memodifikasi data sebelum menyimpan perubahan ke database.
     * Menambahkan pengecekan apakah pengguna terautentikasi.
     */
    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Memastikan bahwa pengguna sudah terautentikasi
        if (Auth::check()) {
            // Jika pengguna terautentikasi, simpan ID pengguna yang mengupdate
            $data['updated_by'] = Auth::id(); // Menyimpan ID pengguna yang sedang login
        } else {
            // Jika pengguna tidak terautentikasi, lempar error atau logika lain
            throw new \Exception('User not authenticated.');
        }

        return $data;
    }

    /**
     * Mengalihkan pengguna ke halaman tertentu setelah berhasil menyimpan perubahan.
     */
    protected function getRedirectUrl(): string
    {
        // Setelah berhasil mengedit, arahkan ke halaman daftar Beasiswa
        return $this->getResource()::getUrl('index');
    }
}