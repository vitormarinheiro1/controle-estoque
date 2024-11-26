<?php

namespace App\Exports;

use App\Models\Maquina;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class MaquinasExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Maquina::select('colaborador', 'departamento', 'hostname', 'ip', 'mac_address', 'observacao')->get();
    }
    public function headings(): array
    {
        return [
            'Colaborador',
            'Departamento',
            'Hostname',
            'IP',
            'Mac Address',
            'Observação',
        ];
    }
}
