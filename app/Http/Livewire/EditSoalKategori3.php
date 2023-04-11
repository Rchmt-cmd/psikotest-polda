<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditSoalKategori3 extends Component
{
    public $dataSoalKategori3;

    public $nomor_soal;
    public $id_kategori;
    public $pil_a;
    public $pil_b;
    public $pil_c;
    public $pil_d;
    public $jawaban;

    protected $rules = [
        'nomor_soal' => 'required|unique_with:soal_tes,id_kategori',
        'jawaban' => 'required',
        'pil_a' => 'required|max:1',
        'pil_b' => 'required|max:1',
        'pil_c' => 'required|max:1',
        'pil_d' => 'required|max:1',
    ];

    protected $listeners = [
        'editSoalKategori3'
    ];

    public function editSoalKategori3()
    {
        dd($this->dataSoalKategori3);
        $this->nomor_soal = $this->dataSoalKategori3->nomor_soal;
        $this->id_kategori = $this->dataSoalKategori3->id_kategori;
        $this->pil_a = $this->dataSoalKategori3->pil_a;
        $this->pil_b = $this->dataSoalKategori3->pil_b;
        $this->pil_c = $this->dataSoalKategori3->pil_c;
        $this->pil_d = $this->dataSoalKategori3->pil_d;
        $this->jawaban = $this->dataSoalKategori3->jawaban;
    }
    public function render()
    {
        return view('livewire.edit-soal-kategori3');
    }
}
