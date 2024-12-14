<?php

namespace App\Repositories;

use App\Models\Pendaftaran;
use App\Repositories\Contracts\PendaftaranRepositoryInterface;

class PendaftaranRepository implements PendaftaranRepositoryInterface
{
    public function getAll()
    {
        return Pendaftaran::all();
    }

    public function getById($id)
    {
        return Pendaftaran::findOrFail($id);
    }

    public function create(array $data)
    {
        return Pendaftaran::create($data);
    }

    public function update($id, array $data)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->update($data);
        return $pendaftaran;
    }

    public function delete($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();
        return $pendaftaran;
    }
}