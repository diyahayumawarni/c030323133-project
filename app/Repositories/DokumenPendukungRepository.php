<?php

namespace App\Repositories;

use App\Models\DokumenPendukung;
use App\Repositories\Contracts\DokumenPendukungRepositoryInterface;

class DokumenPendukungRepository implements DokumenPendukungRepositoryInterface
{
    public function getAll()
    {
        return DokumenPendukung::all();
    }

    public function getById($id)
    {
        return DokumenPendukung::findOrFail($id);
    }

    public function create(array $data)
    {
        return DokumenPendukung::create($data);
    }

    public function update($id, array $data)
    {
        $dokumenPendukung = DokumenPendukung::findOrFail($id);
        $dokumenPendukung->update($data);
        return $dokumenPendukung;
    }

    public function delete($id)
    {
        $dokumenPendukung = DokumenPendukung::findOrFail($id);
        $dokumenPendukung->delete();
        return $dokumenPendukung;
    }
}