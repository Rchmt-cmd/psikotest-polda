<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSoalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id_kategori = $this->get('nomor_soal','id_kategori');
        return [
            'nomor_soal' => 'required|unique:soal_tes,nomor_soal,NULL,id,id_kategori' . $id_kategori,
        ];
    }
}
