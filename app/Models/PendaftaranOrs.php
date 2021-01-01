<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PendaftaranOrs extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama', 'nim', 'alamat', 'jurusan', 'studi', 'tempat_lahir',
        'tanggal_lahir', 'organisasi', 'nomor_hp', 'email', 'link_sosialmedia', 'pengalaman_organisasi',
        'tujuan_masuk_policy', 'foto', 'bukti_pembayaran', 'quesioner', 'sertifikat_pkkmb', 'sertifikat_lain'
    ];

    protected $hidden = [];
}
