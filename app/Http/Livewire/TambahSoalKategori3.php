<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use App\Models\SubKategoriSoal;
use Livewire\Component;

class TambahSoalKategori3 extends Component
{
    public $nomor_soal;
    public $id_kategori;
    public $dig_1;
    public $dig_2;
    public $dig_3;
    public $dig_4;
    public $jawaban;
    public $chapter_soal;
    public $daftarChapterKategori3;

    protected $soalKategori3;
    protected $chapterKategori3;
    protected $rules = [
        'nomor_soal' => 'required|unique_with:soal_tes,id_kategori',
        'chapter_soal' => 'required',
        'jawaban' => 'required',
        'dig_1' => 'required|max:1',
        'dig_2' => 'required|max:1',
        'dig_3' => 'required|max:1',
        'dig_4' => 'required|max:1',
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
        $this->dig_1 = '';
        $this->dig_2 = '';
        $this->dig_3 = '';
        $this->dig_4 = '';
        $this->jawaban = '';
        $this->chapter_soal = '';
    }

    public function store()
    {
        $soal = $this->dig_1 . $this->dig_2 . $this->dig_3 . $this->dig_4;
        // dd(strtoupper($soal));
        $this->validate();
        $attributes = [];
        $attributes['nomor_soal'] = $this->nomor_soal;
        $attributes['id_kategori'] = $this->id_kategori;
        $attributes['isi_soal'] = strtoupper($soal);
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
