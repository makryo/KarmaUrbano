<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\VentasExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelVentasController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function export(){
        return Excel::download(new VentasExport, 'ventas.xlsx');
    }
}
