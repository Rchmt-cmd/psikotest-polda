<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriSoal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function masterDurasiTes()
    {
        return $this->hasOne(MasterDurasiTes::class, 'id_durasi', 'id');
    }

    public function subKategoriSoal()
    {
        return $this->hasMany(SubKategoriSoal::class, 'id_subkategori', 'id');
    }

    public function soalTes()
    {
        return $this->hasMany(HasilTes::class, 'id_kategori', 'id');
    }
}
