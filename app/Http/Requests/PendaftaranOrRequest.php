<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendaftaranOrRequest extends FormRequest
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
            'nim' => 'required|integer',
            'alamat' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'studi' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|date',
            'organisasi' => 'required|max:255',
            'nomor_hp' => 'required|numeric',
            'email' => 'required|max:255',
            'link_sosialmedia' => 'required|max:255',
            'pengalaman_organisasi' => 'required|max:255',
            'tujuan_masuk_policy' => 'required|max:255',
            'foto' => 'required|image|max:555',
            'bukti_pembayaran' => 'required|image|mimes:jpg,png,jpeg|max:558',
            'quesioner' => 'required|mimes:docx,pdf|max:2048',
            'sertifikat_pkkmb' => 'required|mimes:docx,pdf|max:2048',
            'sertifikat_lain' => 'mimes:docx,pdf|max:2048'
        ];
    }
}
