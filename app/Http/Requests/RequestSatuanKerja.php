<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestSatuanKerja extends Request
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
            'nama_satuan_kerja' => 'required',
            'parent_unit' => 'required',
        ];
    }

      public function message()
    {
        return [ 'nama_satuan_kerja.required' => 'Kolom Nama Satuan Kerja Belum Di Isi',
        'parent_unit.required' => 'Kolom Parent Belum Di Isi',
        


        ];
    }
}
