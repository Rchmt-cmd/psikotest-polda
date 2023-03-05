<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalTes extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jawabanPeserta()
    {
        return $this->hasMany(JawabanPeserta::class, 'id_soal', 'id');
    }

    public function kategoriSoal()
    {
        return $this->belongsTo(KategoriSoal::class, 'id_kategori', 'id');
    }

    public function subKategoriSoal()
    {
        return $this->belongsTo(SubKategoriSoal::class, 'id_subkategori', 'id');
    }
}
