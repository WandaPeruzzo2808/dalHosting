<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function export() 
    {
        return Excel::download(new InvoicesExport, 'invoices.xlsx');
    }
}
