<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CompraExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelComprasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function export(){
        return Excel::download(new CompraExport, 'compras.xlsx');
    }
}
