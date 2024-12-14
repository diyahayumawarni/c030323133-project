<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewPendaftaranRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Set true jika user diizinkan untuk membuat request ini
    }

    public function rules()
    {
        return [
            'pendaftaran_id' => 'required|exists:pendaftarans,id', // ID pendaftaran yang di-review
            'reviewer_id' => 'required|exists:users,id', // ID reviewer yang memberikan review
            'catatan_review' => 'nullable|string', // Catatan tambahan dalam review
            'hasil_review' => 'nullable|in:diterima,ditolak', // Hasil review untuk pendaftaran
        ];
    }

    public function messages()
    {
        return [
            'pendaftaran_id.required' => 'ID pendaftaran harus diisi.',
            'reviewer_id.required' => 'ID reviewer harus diisi.',
            'catatan_review.string' => 'Catatan review harus berupa teks.',
            'hasil_review.in' => 'Hasil review harus berupa "diterima" atau "ditolak".',
        ];
    }
}
