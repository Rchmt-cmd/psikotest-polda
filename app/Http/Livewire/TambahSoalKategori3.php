<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use Livewire\Component;

class TambahSoalKategori3 extends Component
{
    public $nomor_soal;
    public $id_kategori;
    public $pil_a;
    public $pil_b;
    public $pil_c;
    public $pil_d;
    public $jawaban;

    protected $soalKategori3;
    protected $rules = [
        'nomor_soal' => 'required|unique_with:soal_tes,id_kategori',
        'jawaban' => 'required',
        'pil_a' => 'required|max:1',
        'pil_b' => 'required|max:1',
        'pil_c' => 'required|max:1',
        'pil_d' => 'required|max:1',
    ];
    
    public function mount()
    {
        $this->id_kategori = '3';
    }

    public function boot(SoalTes $soalKategori3)
    {
        $this->soalKategori3 = $soalKategori3;
    }

    public function resetField()
    {
        $this->nomor_soal = '';
        $this->pil_a = '';
        $this->pil_b = '';
        $this->pil_c = '';
        $this->pil_d = '';
        $this->jawaban = '';
    }

    public function store()
    {
        $this->validate();
        $attributes = [];
        $attributes['nomor_soal'] = $this->nomor_soal;
        $attributes['id_kategori'] = $this->id_kategori;
        $attributes['pil_a'] = $this->pil_a;
        $attributes['pil_b'] = $this->pil_b;
        $attributes['pil_c'] = $this->pil_c;
        $attributes['pil_d'] = $this->pil_d;
        $attributes['jawaban'] = $this->jawaban;

        $this->soalKategori3->create($attributes);
        $this->resetField();
        $this->emit('dataSoal3Stored');
    }

    public function render()
    {
        return view('livewire.tambah-soal-kategori3');
    }
}
