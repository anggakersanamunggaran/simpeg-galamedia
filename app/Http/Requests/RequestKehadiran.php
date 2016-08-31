<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestKehadiran extends Request
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
        return ['status_kehadiran' => 'required'
        
            //
        ];
    }

    public function message()
    {
        return [ 'status_kehadiran.required' => 'Kolom Belum diisi'
        
       


        ];
    }
}
