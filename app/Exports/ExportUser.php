<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportUser implements FromCollection, WithHeadings 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::where('is_admin', 0)->select('name', 'nomor_tes', 'no_hp', 'status_tes')->get();
    }

    public function headings(): array
    {
        return ["Nama", "Nomor Tes", "Nomor HP", "Status Tes"];
    }
}
