<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function getAll();
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete(int $id);
    public function find(int $id);
    public function findByEmail(string $email);
}