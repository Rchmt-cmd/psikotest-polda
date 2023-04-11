<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditSoalKategori2 extends Component
{
    use WithFileUploads;

    public $dataSoalKategori2;
    public $nomor_soal;
    public $isi_soal;
    public $gambar_soal;
    public $jawaban;
    public $id_kategori;
    
    protected $soalKategori2;
    protected $listeners = [
        'editSoalKategori2'
    ];
    protected $rules = [
        'nomor_soal' => 'required|unique_with:soal_tes,id_kategori',
        'isi_soal' => 'required',
        'jawaban' => 'required',
    ];

    public function mount()
    {
        $this->id_kategori = '2';
    }
    
    public function boot(SoalTes $soalKategori2)
    {
        $this->soalKategori2 = $soalKategori2;
    }

    public function editSoalKategori2()
    {
        // dd($this->dataSoalKategori2);
        $this->nomor_soal = $this->dataSoalKategori2->nomor_soal;
        $this->isi_soal = $this->dataSoalKategori2->isi_soal;
        $this->gambar_soal = $this->dataSoalKategori2->gambar_soal;
        $this->jawaban = $this->dataSoalKategori2->jawaban;
    }

    public function resetField()
    {
        $this->nomor_soal = '';
        $this->isi_soal = '';
        $this->gambar_soal = '';
        $this->jawaban = '';
    }

    public function update()
    {
        $this->validate();
        $attributes = [];
        $attributes['nomor_soal'] = $this->dataSoalKategori2->nomor_soal;
        $attributes['isi_soal'] = $this->dataSoalKategori2->isi_soal;
        $attributes['gambar_soal'] = (!empty($this->gambar_soal)) ? $this->gambar_soal->store('files/soal_kategori_2', 'public') : '';
        $attributes['jawaban'] = $this->dataSoalKategori2->jawaban;
        $attributes['pil_a'] = 'Sangat Setuju';
        $attributes['pil_b'] = 'Setuju';
        $attributes['pil_c'] = 'Tidak Setuju';
        $attributes['pil_d'] = 'Sangat Tidak Setuju';

        $this->soalKategori2->where('id', $this->dataSoalKategori2->id)->update($attributes);
        $this->resetField();
        $this->emit('dataSoal2Updated');

    }
    public function render()
    {
        return view('livewire.edit-soal-kategori2');
    }
}
