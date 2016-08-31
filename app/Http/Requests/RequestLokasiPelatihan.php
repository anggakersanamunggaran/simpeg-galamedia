<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestLokasiPelatihan extends Request
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
        return [ 'nama_pelatihan' => 'required',
        'level' => 'required'
            //
        ];
    }

    public function message()
    {
        return [ 'nama_pelatihan.required' => 'Kolom Lokasi Pelatihan Harus diisi',
        'level.required' => 'Kolom level harus diisi'


        ];
    }
}
