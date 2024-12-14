<?php

namespace App\Repositories;

use App\Models\Notifikasi;
use App\Repositories\Contracts\NotifikasiRepositoryInterface;

class NotifikasiRepository implements NotifikasiRepositoryInterface
{
    public function getAll()
    {
        return Notifikasi::all();
    }

    // Menambahkan metode khusus untuk mendapatkan notifikasi berdasarkan user_id
    public function getAllByUserId($userId)
    {
        return Notifikasi::where('user_id', $userId)->get();
    }

    public function getById($id)
    {
        return Notifikasi::findOrFail($id);
    }

    public function create(array $data)
    {
        return Notifikasi::create($data);
    }

    public function update($id, array $data)
    {
        $notifikasi = Notifikasi::findOrFail($id);
        $notifikasi->update($data);
        return $notifikasi;
    }

    public function delete($id)
    {
        $notifikasi = Notifikasi::findOrFail($id);
        $notifikasi->delete();
        return $notifikasi;
    }
}
