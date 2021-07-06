<?php

namespace App\Exports;

use App\Models\Attendent;
use Maatwebsite\Excel\Concerns\FromCollection;

class AttendentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Attendent::all();
    }
}
