<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\SoalTes\SoalTesRepository;
use Livewire\WithFileUploads;

class TambahSoal extends Component
{
    use WithFileUploads;
    
    public $nomor_soal;
    public $isi_soal;
    public $gambar_soal;
    public $pil_a;
    public $gambar_pil_a;
    public $pil_b;
    public $gambar_pil_b;
    public $pil_c;
    public $gambar_pil_c;
    public $pil_d;
    public $gambar_pil_d;
    public $jawaban;
    public $bobot;
    
    protected $soalTesRepository;
    
    public function boot(SoalTesRepository $soalTesRepository)
    {
        $this->soalTesRepository = $soalTesRepository;
    }
    
    public function store()
    {
        $attributes = [];
        $attributes['nomor_soal'] = $this->nomor_soal;
        $attributes['isi_soal'] = $this->isi_soal;
        $attributes['gambar_soal'] = $this->gambar_soal;
        $attributes['pil_a'] = $this->pil_a;
        $attributes['gambar_pil_a'] = $this->gambar_pil_a;
        $attributes['pil_b'] = $this->pil_b;
        $attributes['gambar_pil_b'] = $this->gambar_pil_b;
        $attributes['pil_c'] = $this->pil_c;
        $attributes['gambar_pil_c'] = $this->gambar_pil_c;
        $attributes['pil_d'] = $this->pil_d;
        $attributes['gambar_pil_d'] = $this->gambar_pil_d;
        $attributes['jawaban'] = $this->jawaban;
        $attributes['bobot'] = $this->bobot;

        $this->soalTesRepository->create($attributes);
        
    }

    public function render()
    {
        return view('livewire.tambah-soal');
    }
}
