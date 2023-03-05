<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKategoriSoal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kategoriSoal()
    {
        return $this->belongsTo(KategoriSoal::class, 'id_subkategori', 'id');
    }

    public function soalTes()
    {
        return $this->hasMany(SoalTes::class, 'id_subkategori', 'id');
    }
}
