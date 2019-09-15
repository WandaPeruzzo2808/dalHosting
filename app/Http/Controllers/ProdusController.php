<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductosExport;
use Illuminate\Http\Request;

class ProdusController extends Controller
{
    public function export() 
    {
        return Excel::download(new ProductosExport, 'precios.xlsx');
    }
}
