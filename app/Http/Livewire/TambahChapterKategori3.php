<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SubKategoriSoal;

class TambahChapterKategori3 extends Component
{
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

    public function boot(SubKategoriSoal $subKategoriSoal)
    {
        $this->subKategoriSoal = $subKategoriSoal;
    }

    public function resetField()
    {
        $this->deskripsi = '';
        $this->digit1 = '';
        $this->digit2 = '';
        $this->digit3 = '';
        $this->digit4 = '';
        $this->digit5 = '';
    }

    public function store()
    {
        $this->validate();
        $attributes = [];
        $attributes['id_kategori'] = 3; 
        $attributes['deskripsi_subkategori'] = 'Kolom ' . $this->deskripsi;
        $attributes['isi_subkategori'] = strtoupper($this->digit1) . strtoupper($this->digit2) . strtoupper($this->digit3) . strtoupper($this->digit4) . strtoupper($this->digit5);

        $this->subKategoriSoal->create($attributes);
        $this->resetField();
        $this->emit('dataChapter3Stored');
    }
    
    public function render()
    {
        return view('livewire.tambah-chapter-kategori3');
    }
}
