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
        return User::where('is_admin', 0)->select('name', 'email', 'nomor_tes', 'jenis_kelamin', 'tmpt_lahir', 'tgl_lahir', 'alamat', 'no_hp')->get();
    }

    public function headings(): array
    {
        return ["Nama", "Email", "Nomor Tes", "Jenis Kelamin", "Tempat Lahir", "Tanggal Lahir", "Alamat", "Nomor HP"];
    }
}
