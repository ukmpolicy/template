<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumniRequest extends FormRequest
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
            'nama' => 'required|max:255',
            'email' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'prodi' => 'required|max:255',
            'no_hp' => 'required',
            'periode' => 'required|integer',
            'jurusan' => 'required|max:255',
            'foto' => 'required|image'
        ];
    }
}
