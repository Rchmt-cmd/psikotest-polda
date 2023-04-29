<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use App\Models\SubKategoriSoal;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditSoalKategori1 extends Component
{
    use WithFileUploads;

    public $dataSoalKategori1;

    public $nomor_soal;
    public $id_kategori;
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

    protected $subKategoriSoal;
    protected $soalTes;
    protected $listeners = [
        'editSoalKategori1',
    ];
    protected $rules = [
        'nomor_soal' => 'required|unique_with:soal_tes,id_kategori',
        'isi_soal' => 'required',
        'jawaban' => 'required',
    ];

    public function mount()
    {
        $this->id_kategori = '1';
    }

    public function boot(SubKategoriSoal $subKategoriSoal, SoalTes $soalTes)
    {
        $this->subKategoriSoal = $subKategoriSoal;
        $this->soalTes = $soalTes;
    }
    
    public function editSoalKategori1()
    {
        $this->nomor_soal = $this->dataSoalKategori1->nomor_soal;
        $this->id_kategori = $this->dataSoalKategori1->id_kategori;
        $this->isi_soal = $this->dataSoalKategori1->isi_soal;
        $this->gambar_soal = $this->dataSoalKategori1->gambar_soal;
        $this->pil_a = $this->dataSoalKategori1->pil_a;
        $this->gambar_pil_a = $this->dataSoalKategori1->gambar_pil_a;
        $this->pil_b = $this->dataSoalKategori1->pil_b;
        $this->gambar_pil_b = $this->dataSoalKategori1->gambar_pil_b;
        $this->pil_c = $this->dataSoalKategori1->pil_c;
        $this->gambar_pil_c = $this->dataSoalKategori1->gambar_pil_c;
        $this->pil_d = $this->dataSoalKategori1->pil_d;
        $this->gambar_pil_d = $this->dataSoalKategori1->gambar_pil_d;
        $this->pil_e = $this->dataSoalKategori1->pil_e;
        $this->gambar_pil_e = $this->dataSoalKategori1->gambar_pil_e;
        $this->jawaban = $this->dataSoalKategori1->jawaban;
        $this->chapter_soal = $this->dataSoalKategori1->id_subkategori;
    }

    public function resetField()
    {
        $this->nomor_soal = '';
        $this->id_kategori = '';
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
        $this->pil_e = '';
        $this->gambar_pil_e = '';
        $this->jawaban = '';
        $this->chapter_soal = '';
    }

    public function update()
    {
        $validated_data = $this->validate([
            'nomor_soal' => 'required|unique_with:soal_tes,id_kategori,'. $this->nomor_soal . '=nomor_soal',
            'isi_soal' => 'required',
            'jawaban' => 'required',
        ]);
        $validated_data = [];
        $validated_data['nomor_soal'] = $this->nomor_soal;
        $validated_data['id_kategori'] = $this->id_kategori;
        $validated_data['isi_soal'] = $this->isi_soal;
        $validated_data['gambar_soal'] = (!empty($this->gambar_soal)) ? $this->gambar_soal->store('files/soal_kategori_1', 'public') : '';
        $validated_data['pil_a'] = $this->pil_a;
        $validated_data['gambar_pil_a'] = (!empty($this->gambar_pil_a)) ? $this->gambar_pil_a->store('files/jawaban_a', 'public') : '';
        $validated_data['pil_b'] = $this->pil_b;
        $validated_data['gambar_pil_b'] = (!empty($this->gambar_pil_b)) ? $this->gambar_pil_b->store('files/jawaban_b', 'public') : '';
        $validated_data['pil_c'] = $this->pil_c;
        $validated_data['gambar_pil_c'] = (!empty($this->gambar_pil_c)) ? $this->gambar_pil_c->store('files/jawaban_c', 'public') : '';
        $validated_data['pil_d'] = $this->pil_d;
        $validated_data['gambar_pil_d'] = (!empty($this->gambar_pil_d)) ? $this->gambar_pil_d->store('files/jawaban_d', 'public') : '';
        $validated_data['pil_e'] = $this->pil_e;
        $validated_data['gambar_pil_e'] = (!empty($this->gambar_pil_e)) ? $this->gambar_pil_e->store('files/jawaban_e', 'public') : '';
        $validated_data['jawaban'] = $this->jawaban;
        $validated_data['id_subkategori'] = $this->chapter_soal;

        $this->soalTes->where('id', $this->dataSoalKategori1->id)->update($validated_data);
        $this->resetField();
        $this->emit('dataSoal1Updated');
    }

    public function render()
    {
        return view('livewire.edit-soal-kategori1')->with([
            'daftar_chapter' => $this->subKategoriSoal->where('id_kategori', '1')->get(),
        ]);
    }
}
