<?php

namespace App\Repositories;

use App\Models\ReviewPendaftaran;
use App\Repositories\Contracts\ReviewPendaftaranRepositoryInterface;

class ReviewPendaftaranRepository implements ReviewPendaftaranRepositoryInterface
{
    public function getAll()
    {
        return ReviewPendaftaran::all();
    }

    public function getById($id)
    {
        return ReviewPendaftaran::findOrFail($id);
    }

    public function create(array $data)
    {
        return ReviewPendaftaran::create($data);
    }

    public function update($id, array $data)
    {
        $review = ReviewPendaftaran::findOrFail($id);
        $review->update($data);
        return $review;
    }

    public function delete($id)
    {
        $review = ReviewPendaftaran::findOrFail($id);
        $review->delete();
        return $review;
    }
}