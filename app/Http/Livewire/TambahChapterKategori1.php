<?php

namespace App\Http\Livewire;

use App\Models\SubKategoriSoal;
use Livewire\Component;
use Livewire\WithFileUploads;

class TambahChapterKategori1 extends Component
{
    use WithFileUploads;
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
        $attributes['gambar_subkategori'] = (!empty($this->gambar_chapter)) ? $this->gambar_chapter->store('files/chapter_kategori_1', 'public') : ""; 


        // dd($attributes);

        $this->subKategoriSoal->create($attributes);
        $this->resetField();
        $this->emit('dataChapterStored');
    }

    public function render()
    {
        return view('livewire.tambah-chapter-kategori1');
    }
}
