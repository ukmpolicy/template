<?php

namespace App\Exports;

use App\Models\PendaftaranOrs;
use Maatwebsite\Excel\Concerns\FromCollection;

class NewMemberExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return PendaftaranOrs::all();
    }
}
