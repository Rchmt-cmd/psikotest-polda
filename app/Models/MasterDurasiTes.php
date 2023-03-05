<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDurasiTes extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kategoriSoal()
    {
        return $this->belongsTo(KategoriSoal::class, 'id_durasi', 'id');
    }
}
