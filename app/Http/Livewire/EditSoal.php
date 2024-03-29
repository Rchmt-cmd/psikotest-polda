<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\SoalTes\SoalTesRepository;
use Livewire\WithFileUploads;

use function PHPUnit\Framework\isEmpty;

class EditSoal extends Component
{
    use WithFileUploads;
    public $dataSoal;

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
    protected $listeners = [
        'editSoal',
    ];

    public function editSoal()
    {
        // dd($this->dataSoal);
        $this->nomor_soal = $this->dataSoal->nomor_soal;
        $this->isi_soal = $this->dataSoal->isi_soal;
        $this->gambar_soal = $this->dataSoal->gambar_soal;
        $this->pil_a = $this->dataSoal->pil_a;
        $this->gambar_pil_a = $this->dataSoal->gambar_pil_a;
        $this->pil_b = $this->dataSoal->pil_b;
        $this->gambar_pil_b = $this->dataSoal->gambar_pil_b;
        $this->pil_c = $this->dataSoal->pil_c;
        $this->gambar_pil_c = $this->dataSoal->gambar_pil_c;
        $this->pil_d = $this->dataSoal->pil_d;
        $this->gambar_pil_d = $this->dataSoal->gambar_pil_d;
        $this->jawaban = $this->dataSoal->jawaban;
        $this->bobot = $this->dataSoal->bobot;
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
        $this->bobot = '';
        
    }

    public function update()
    {
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
        $attributes['jawaban'] = $this->jawaban;
        $attributes['bobot'] = $this->bobot;

        $this->soalTesRepository->update($this->dataSoal->id, $attributes);
        $this->resetField();
        $this->emit('dataSoalUpdated');
    }

    public function boot(SoalTesRepository $soalTesRepository)
    {
        $this->soalTesRepository = $soalTesRepository;
    }
    public function render()
    {
        return view('livewire.edit-soal');
    }
}
