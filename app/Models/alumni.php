<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class alumni extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nama', 'email', 'jurusan', 'prodi', 'alamat', 'no_hp', 'periode', 'jabatan', 'bidang', 'foto'
    ];
}
