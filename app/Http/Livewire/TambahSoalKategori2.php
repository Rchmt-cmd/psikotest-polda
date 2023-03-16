<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use Livewire\Component;
use Livewire\WithFileUploads;

class TambahSoalKategori2 extends Component
{
    use WithFileUploads;
    
    public $nomor_soal;
    public $isi_soal;
    public $gambar_soal;
    public $jawaban;
    
    protected $soalKategori2;
    protected $rules = [
        'nomor_soal' => 'required|unique_with:soal_tes,id_kategori',
        'isi_soal' => 'required',
        'jawaban' => 'required',
    ];
    
    public function boot(SoalTes $soalKategori2)
    {
        $this->soalKategori2 = $soalKategori2;
    }
    
    public function resetField()
    {
        $this->nomor_soal = '';
        $this->isi_soal = '';
        $this->gambar_soal = '';
        $this->jawaban = '';
    }
    
    public function store()
    {
        $this->validate();
        $attributes = [];
        $attributes['nomor_soal'] = $this->nomor_soal;
        $attributes['id_kategori'] = '2';
        $attributes['isi_soal'] = $this->isi_soal;
        $attributes['gambar_soal'] = (!is_null($this->gambar_soal)) ? $this->gambar_soal->store('files/soal-kategori2', 'public') : ''; 
        $attributes['pil_a'] = 'Sangat Setuju';
        $attributes['pil_b'] = 'Setuju';
        $attributes['pil_c'] = 'Tidak Setuju';
        $attributes['pil_d'] = 'Sangat Tidak Setuju';
        $attributes['jawaban'] = $this->jawaban;

        $this->soalKategori2->create($attributes);
        $this->resetField();
        $this->emit('dataStored', 'Soal Kategori 2');

    }
    public function render()
    {
        return view('livewire.tambah-soal-kategori2');
    }
}
