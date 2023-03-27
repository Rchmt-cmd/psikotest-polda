<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use Livewire\Component;

class EditSoalKategori2 extends Component
{
    public $dataSoalKategori2;
    public $nomor_soal;
    public $isi_soal;
    public $gambar_soal;
    public $jawaban;
    
    protected $soalKategori2;
    protected $listeners = [
        'editSoal'
    ];

    public function editSoal()
    {
        $this->nomor_soal = $this->dataSoalKategori2->nomor_soal;
        $this->isi_soal = $this->dataSoalKategori2->isi_soal;
        $this->gambar_soal = $this->dataSoalKategori2->gambar_soal;
        $this->jawaban = $this->dataSoalKategori2->jawaban;
    }

    public function boot(SoalTes $soalKategori2)
    {
        $this->soalKategori2 = $soalKategori2;
    }

    public function render()
    {
        return view('livewire.edit-soal-kategori2');
    }
}
