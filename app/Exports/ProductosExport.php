<?php

namespace App\Exports;

use App\Producto;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductosExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    
    public function collection()
    {
        return Producto::all();
    }

  public function headings(): array
    {
        return [
            '#',
            'Codigo',
            'Categoria',
            'Producto/Reemplazo',
            'Descripcion',
            'Cod DIPRA',
            'Cod GV',
            'Precio',
            'Precio U$S'
        ];
    }
}