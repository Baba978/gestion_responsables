<?php

namespace App\Exports;

use App\Models\Responsable;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Facades\Excel;

class ResponsablesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Responsable::all();
    }

    public function exportExcel()
{
    return Excel::download(new ResponsablesExport, 'responsables.xlsx');
}
}
