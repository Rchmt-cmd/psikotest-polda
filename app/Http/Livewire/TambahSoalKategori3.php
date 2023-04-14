<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use App\Models\SubKategoriSoal;
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
    public $chapter_soal;
    public $daftarChapterKategori3;

    protected $soalKategori3;
    protected $chapterKategori3;
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

    public function boot(SoalTes $soalKategori3, SubKategoriSoal $chapterKategori3)
    {
        $this->soalKategori3 = $soalKategori3;
        $this->chapterKategori3 = $chapterKategori3;
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
        $attributes['pil_a'] = strtoupper($this->pil_a);
        $attributes['pil_b'] = strtoupper($this->pil_b);
        $attributes['pil_c'] = strtoupper($this->pil_c);
        $attributes['pil_d'] = strtoupper($this->pil_d);
        $attributes['id_subkategori'] = $this->chapter_soal;
        $attributes['jawaban'] = $this->jawaban;

        $this->soalKategori3->create($attributes);
        $this->resetField();
        $this->emit('dataSoal3Stored');
    }

    public function render()
    {
        $this->daftarChapterKategori3 = $this->chapterKategori3->where('id_kategori', 3)->get();
        return view('livewire.tambah-soal-kategori3');
    }
}
