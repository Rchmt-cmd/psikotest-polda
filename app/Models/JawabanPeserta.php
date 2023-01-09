<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanPeserta extends Model
{
    protected $guarded =[];
    use HasFactory;

    public function hasilTes()
    {
        return $this->belongsTo(HasilTes::class, 'id_hasil_tes');
    }

    // public function soalTes()
    // {
    //     return $this->belongsTo(SoalTes::class, 'id_soal', 'id');
    // }
}
