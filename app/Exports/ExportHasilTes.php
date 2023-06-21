<?php

namespace App\Exports;

use App\Models\HasilTes;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportHasilTes implements FromCollection, WithHeadings
{
  /**
   * @return \Illuminate\Support\Collection
  */

  public function collection()
  {
    return HasilTes::select('nama', 'nomor_tes', 'tanggal_tes', 'waktu_mulai_akses', 'jumlah_benar_kategori1', 'jumlah_benar_kategori2', 'jumlah_benar_kategori3')->get();
  }

  public function headings(): array
  {
    return ['Nama', 'Nomor Tes', 'Tanggal Tes', 'Waktu Tes', 'Jumlah Benar Tes Kecerdasan', 'Jumlah Benar Tes Kepribadian', 'Jumlah Benar Tes Sikap Kerja'];
  }
}