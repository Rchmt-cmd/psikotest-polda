<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilTes extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function jawabanPeserta()
    {
        return $this->hasMany(JawabanPeserta::class, 'id_hasil_tes', 'id');
    }
}
