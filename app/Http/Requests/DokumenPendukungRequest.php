<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DokumenPendukungRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Set true jika user diizinkan untuk membuat request ini
    }

    public function rules()
    {
        return [
            'pendaftaran_id' => 'required|exists:pendaftarans,id',
            'nama_dokumen' => 'required|string|max:100',
            'file_path' => 'required|string',
            'status_verifikasi' => 'required|in:belum,sudah',
        ];
    }

    public function messages()
    {
        return [
            'pendaftaran_id.required' => 'ID pendaftaran harus diisi.',
            'nama_dokumen.required' => 'Nama dokumen harus diisi.',
            'file_path.required' => 'File path harus diisi.',
            'status_verifikasi.required' => 'Status verifikasi harus dipilih.',
        ];
    }
}
