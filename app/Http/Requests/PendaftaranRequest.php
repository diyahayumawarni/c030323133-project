<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendaftaranRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Set true jika user diizinkan untuk membuat request ini
    }

    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'beasiswa_id' => 'required|exists:beasiswas,id',
            'tanggal_daftar' => 'required|date',
            'status' => 'required|in:pending,diterima,ditolak',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'ID user harus diisi.',
            'beasiswa_id.required' => 'ID beasiswa harus diisi.',
            'tanggal_daftar.required' => 'Tanggal pendaftaran harus diisi.',
            'status.required' => 'Status harus dipilih.',
        ];
    }
}
