<?php

namespace App\Http\Livewire;

use App\Models\SubKategoriSoal;
use Livewire\Component;

class TambahChapter extends Component
{
    public $deskripsi_chapter;
    public $isi_chapter;
    public $gambar_chapter;
    
    protected $subKategoriSoal;
    
    public function boot(SubKategoriSoal $subKategoriSoal)
    {
        $this->subKategoriSoal = $subKategoriSoal;
    }
    
    public function resetField()
    {
        $this->deskripsi_chapter = '';
        $this->isi_chapter = '';
        $this->gambar_chapter = '';
        
    }

    public function store()
    {
        $attributes = [];
        $attributes['id_kategori'] = 1;
        $attributes['deskripsi_subkategori'] = $this->deskripsi_chapter;
        $attributes['isi_subkategori'] = $this->isi_chapter;
        $attributes['gambar_subkategori'] = $this->gambar_chapter;
        // dd($attributes);

        $this->subKategoriSoal->create($attributes);
        $this->resetField();
        $this->emit('dataSoalStored');
    }

    public function render()
    {
        return view('livewire.tambah-chapter');
    }
}
