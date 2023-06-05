<?php

namespace App\Exports;

use DB;
use App\Models\Cita;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CitasExport implements FromCollection,WithHeadings
{

    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Apellidos',
            'Email',
            'Telefono',
            'Web',
            '¿En que servicio estás interesado?',
            '¿Cómo te enteraste de nosotros?',
            'Mensaje',
            'Created at',
            'Deleted at',

        ];
    }

    public function collection()
    {
        return Cita::all();
    }
}
