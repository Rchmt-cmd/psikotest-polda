<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSoalKategori3Request extends FormRequest
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
        return [
            'nomor_soal' => 'required|unique_with:soal_tes,id_kategori,' . $this->nomor_soal .  '= nomor_soal',
            'jawaban' => 'required',
            'pil_a' => 'required|max:1',
            'pil_b' => 'required|max:1',
            'pil_c' => 'required|max:1',
            'pil_d' => 'required|max:1',
        ];
    }
}
