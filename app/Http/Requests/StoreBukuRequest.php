<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBukuRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('buku')?->id;

        return [
            'isbn' => [
                'required',
                'string',
                'max:30',
                Rule::unique('bukus', 'isbn')->ignore($id)
            ],

            'judul' => [
                'required',
                'string',
                'min:3',
                'max:150'
            ],

            'penulis' => [
                'required',
                'string',
                'min:3',
                'max:100'
            ],

            'stok' => [
                'required',
                'integer',
                'min:0'
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'isbn.required' => 'ISBN wajib diisi.',
            'isbn.unique' => 'ISBN sudah digunakan.',
            'judul.required' => 'Judul buku wajib diisi.',
            'judul.min' => 'Judul buku minimal 3 karakter.',
            'penulis.required' => 'Nama penulis wajib diisi.',
            'penulis.min' => 'Nama penulis minimal 3 karakter.',
            'stok.required' => 'Stok buku wajib diisi.',
            'stok.integer' => 'Stok harus berupa angka.',
            'stok.min' => 'Stok tidak boleh negatif.',
        ];
    }
}