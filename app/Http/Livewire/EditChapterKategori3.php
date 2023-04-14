<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SubKategoriSoal;

class EditChapterKategori3 extends Component
{
    public $dataChapterKategori3;

    public $digit1;
    public $digit2;
    public $digit3;
    public $digit4;
    public $digit5;
    public $deskripsi;

    protected $subKategoriSoal;
    protected $rules = [
        'deskripsi' => 'required',
        'digit1' => 'required|max:1',
        'digit2' => 'required|max:1',
        'digit3' => 'required|max:1',
        'digit4' => 'required|max:1',
        'digit5' => 'required|max:1',
    ];
    protected $listeners = [
        'editChapterKategori3'
    ];

    public function boot(SubKategoriSoal $subKategoriSoal)
    {
        $this->subKategoriSoal = $subKategoriSoal;
    }

    public function editChapterKategori3()
    {
        $isi_subkategori = str_split($this->dataChapterKategori3->isi_subkategori);
        $nomor_kolom = explode(' ', $this->dataChapterKategori3->deskripsi_subkategori);
        $this->digit1 = $isi_subkategori[0];
        $this->digit2 = $isi_subkategori[1];
        $this->digit3 = $isi_subkategori[2];
        $this->digit4 = $isi_subkategori[3];
        $this->digit5 = $isi_subkategori[4];
        $this->deskripsi = $nomor_kolom[1];
    }

    public function resetField()
    {
        $this->digit1 = '';
        $this->digit2 = '';
        $this->digit3 = '';
        $this->digit4 = '';
        $this->digit5 = '';
    }

    public function update()
    {
        $this->validate();
        $attributes = [];
        $attributes['id_kategori'] = 3;
        $attributes['deskripsi_subkategori'] = 'Kolom ' . $this->deskripsi;
        $attributes['isi_subkategori'] = strtoupper($this->digit1) . strtoupper($this->digit2) . strtoupper($this->digit3) . strtoupper($this->digit4) . strtoupper($this->digit5);

        $this->subKategoriSoal->where('id', $this->dataChapterKategori3->id)->update($attributes);
        $this->resetField();
        $this->emit('dataChapter3Updated');
    }

    public function render()
    {
        return view('livewire.edit-chapter-kategori3');
    }
}
