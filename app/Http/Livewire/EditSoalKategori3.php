<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use App\Models\SubKategoriSoal;
use Livewire\Component;

class EditSoalKategori3 extends Component
{
    public $dataSoalKategori3;
    public $daftarChapterKategori3;

    public $nomor_soal;
    public $id_kategori;
    public $id_subkategori;
    public $pil_a;
    public $pil_b;
    public $pil_c;
    public $pil_d;
    public $jawaban;
    
    protected $soalKategori3;
    protected $subKategoriSoal;
    
    protected $listeners = [
        'editSoalKategori3'
    ];
    
    public function boot(SoalTes $soalKategori3, SubKategoriSoal $subKategoriSoal)
    {
        $this->soalKategori3 = $soalKategori3;
        $this->subKategoriSoal = $subKategoriSoal;
    }
    
    public function resetField()
    {
        $this->nomor_soal = '';
        $this->pil_a = '';
        $this->pil_b = '';
        $this->pil_c = '';
        $this->pil_d = '';
        $this->jawaban = '';
        $this->chapter_soal = '';
    }
    
    public function editSoalKategori3()
    {
        $this->nomor_soal = $this->dataSoalKategori3->nomor_soal;
        $this->id_kategori = $this->dataSoalKategori3->id_kategori;
        $this->pil_a = $this->dataSoalKategori3->pil_a;
        $this->pil_b = $this->dataSoalKategori3->pil_b;
        $this->pil_c = $this->dataSoalKategori3->pil_c;
        $this->pil_d = $this->dataSoalKategori3->pil_d;
        $this->jawaban = $this->dataSoalKategori3->jawaban;
    }

    public function update()
    {
        $validatedData = $this->validate(
            [
                'nomor_soal' => 'required|unique_with:soal_tes,id_kategori,' . $this->nomor_soal .  '= nomor_soal',
                'jawaban' => 'required',
                'pil_a' => 'required|max:1',
                'pil_b' => 'required|max:1',
                'pil_c' => 'required|max:1',
                'pil_d' => 'required|max:1',
                'id_subkategori' => 'required'
            ]
        );

        $this->soalKategori3->where('id', $this->dataSoalKategori3->id)->update($validatedData);
        $this->resetField();
        $this->emit('dataSoal3Updated');
    }
    public function render()
    {
        $this->daftarChapterKategori3 = $this->subKategoriSoal->where('id_kategori', 3)->get();
        return view('livewire.edit-soal-kategori3');
    }
}
