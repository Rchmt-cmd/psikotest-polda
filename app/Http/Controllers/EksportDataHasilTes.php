<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportHasilTes;

class EksportDataHasilTes extends Controller
{
    public function export()
    {
        return Excel::download(new ExportHasilTes, 'Data-Hasil-Tes-Psikotest.xlsx');
    }
}
