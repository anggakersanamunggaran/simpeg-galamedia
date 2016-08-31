<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestEselon extends Request
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
        return [    'nama_eselon' => 'required',
        'level' => 'required',

            //
        ];
    }

     public function message()
    {
        return [ 'nama_eselon.required' => 'Kolom Nama Eselon Harus Di Isi',
        'level.required' => 'Kolom Level Belum Di Isi',



        ];
    }
}
