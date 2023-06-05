<?php

namespace App\Exports;

use DB;
use App\Models\Mensaje;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MensajesExport implements FromCollection,WithHeadings
{

    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Email',
            'Telefono',
            'Created at',
            'Deleted at',
            'Mensaje',

        ];
    }

    public function collection()
    {
        return Mensaje::all();
    }
}
