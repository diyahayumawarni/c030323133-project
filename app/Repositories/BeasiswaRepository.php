<?php

namespace App\Repositories;

use App\Models\Beasiswa;
use App\Repositories\Contracts\BeasiswaRepositoryInterface;

class BeasiswaRepository implements BeasiswaRepositoryInterface
{
    public function getAll()
    {
        return Beasiswa::all();
    }

    public function getById($id)
    {
        return Beasiswa::findOrFail($id);
    }

    public function create(array $data)
    {
        return Beasiswa::create($data);
    }

    public function update($id, array $data)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        $beasiswa->update($data);
        return $beasiswa;
    }

    public function delete($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        $beasiswa->delete();
        return $beasiswa;
    }
}