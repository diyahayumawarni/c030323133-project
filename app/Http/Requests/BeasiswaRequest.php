<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeasiswaRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Set true jika user diizinkan untuk membuat request ini
    }

    public function rules()
    {
        return [
            'nama_beasiswa' => 'required|string|max:150',
            'deskripsi' => 'required|string',
            'kuota' => 'required|integer|min:1', // Kuota penerima beasiswa harus lebih dari 0
            'batas_pendaftaran' => 'required|date',
            'ipk_minimum' => 'nullable|numeric|between:0,4', // IPK minimum harus antara 0 dan 4
            'usia_maximum' => 'nullable|integer|min:0', // Usia maksimum harus lebih besar dari 0
        ];
    }

    public function messages()
    {
        return [
            'nama_beasiswa.required' => 'Nama Beasiswa harus diisi.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
            'kuota.required' => 'Kuota harus diisi.',
            'batas_pendaftaran.required' => 'Batas Pendaftaran harus diisi.',
            'ipk_minimum.numeric' => 'IPK minimum harus berupa angka.',
            'usia_maximum.integer' => 'Usia maksimum harus berupa angka.',
        ];
    }
}
