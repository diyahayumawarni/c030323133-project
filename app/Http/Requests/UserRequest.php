<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Set true jika user diizinkan untuk membuat request ini
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email,' . $this->route('user'), // Ignore jika user yang sama
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,pendaftar,reviewer',
            'telepon' => 'nullable|string|max:15',
            'alamat' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'role.required' => 'Role wajib diisi.',
        ];
    }
}
