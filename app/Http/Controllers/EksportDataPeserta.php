<?php

namespace App\Http\Controllers;

use App\Exports\ExportUser;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;

class EksportDataPeserta extends Controller
{
    public function export()
    {
        return Excel::download(new ExportUser, 'Daftar-Nama-Peserta-Psikotest.xlsx');
    }
}
