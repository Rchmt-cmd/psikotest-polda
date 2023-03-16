<?php

namespace App\Http\Livewire;

use App\Models\SubKategoriSoal;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Repositories\SoalTes\SoalTesRepository;

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
    public $pil_e;
    public $gambar_pil_e;
    public $jawaban;
    public $chapter_soal;
    public $bobot;

    protected $subKategoriSoal;

    protected $rules = [
        'nomor_soal' => 'required|unique:soal_tes',
    ];
    
    protected $soalTesRepository;
    
    public function boot(SoalTesRepository $soalTesRepository, SubKategoriSoal $subKategoriSoal)
    {
        $this->soalTesRepository = $soalTesRepository;
        $this->subKategoriSoal = $subKategoriSoal;
    }
    
    public function resetField()
    {
        $this->nomor_soal = '';
        $this->isi_soal = '';
        $this->gambar_soal = '';
        $this->pil_a = '';
        $this->gambar_pil_a = '';
        $this->pil_b = '';
        $this->gambar_pil_b = '';
        $this->pil_c = '';
        $this->gambar_pil_c = '';
        $this->pil_d = '';
        $this->gambar_pil_d = '';
        $this->jawaban = '';
        $this->chapter_soal = '';
        $this->bobot = '';
    }

    public function store()
    {
        $this->validate();
        $attributes = [];
        $attributes['nomor_soal'] = $this->nomor_soal;
        $attributes['isi_soal'] = $this->isi_soal;
        $attributes['gambar_soal'] = $this->gambar_soal;
        $attributes['pil_a'] = $this->pil_a;
        $attributes['gambar_pil_a'] = (!is_null($this->gambar_pil_a)) ? $this->gambar_pil_a->store('files/jawaban_a', 'public') : ''; 
        $attributes['pil_b'] = $this->pil_b;
        $attributes['gambar_pil_b'] = (!is_null($this->gambar_pil_b)) ? $this->gambar_pil_b->store('files/jawaban_b', 'public') : '';
        $attributes['pil_c'] = $this->pil_c;
        $attributes['gambar_pil_c'] = (!is_null($this->gambar_pil_c)) ? $this->gambar_pil_c->store('files/jawaban_c', 'public') : '';
        $attributes['pil_d'] = $this->pil_d;
        $attributes['gambar_pil_d'] = (!is_null($this->gambar_pil_d)) ? $this->gambar_pil_d->store('files/jawaban_d', 'public') : '';
        $attributes['pil_d'] = $this->pil_e;
        $attributes['gambar_pil_e'] = (!is_null($this->gambar_pil_e)) ? $this->gambar_pil_e->store('files/jawaban_e', 'public') : '';
        $attributes['jawaban'] = $this->jawaban;
        $attributes['id_subkategori'] = $this->chapter_soal;

        $this->soalTesRepository->create($attributes);
        $this->resetField();
        $this->emit('dataSoalStored');
        
    }

    public function render()
    {
        return view('livewire.tambah-soal')->with([
            'daftar_chapter' => $this->subKategoriSoal->all(),
        ]);
    }
}
