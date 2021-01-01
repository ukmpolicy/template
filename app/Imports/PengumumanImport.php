<?php

namespace App\Imports;

use App\Models\PengumumanOr;
use Maatwebsite\Excel\Concerns\ToModel;

class PengumumanImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new PengumumanOr([
            'nama' => $row[0],
            'nim' => $row[1],
            'jurusan' => $row[2],
            'keterangan' => $row[3]
        ]);
    }
}
