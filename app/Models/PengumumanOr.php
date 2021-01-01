<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengumumanOr extends Model
{
    use SoftDeletes;

    public $table = "pengumumanor";

    public $fillable = [
        'nama', 'nim', 'jurusan', 'keterangan'
    ];
}
