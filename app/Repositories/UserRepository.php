<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    // Mendapatkan semua data user
    public function getAll()
    {
        return User::all();
    }

    // Menyimpan data user baru
    public function create(array $data)
    {
        return User::create($data);
    }

    // Mengupdate data user berdasarkan ID
    public function update(int $id, array $data)
    {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }

    // Menghapus data user berdasarkan ID
    public function delete(int $id)
    {
        $user = User::findOrFail($id);
        return $user->delete();
    }

    // Mendapatkan data user berdasarkan ID
    public function find(int $id)
    {
        return User::findOrFail($id);
    }

    // Mendapatkan user berdasarkan email
    public function findByEmail(string $email)
    {
        return User::where('email', $email)->first();
    }
}
