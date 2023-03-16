<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditChapterKategori1 extends Component
{
    public $dataChapterKategori1;
    public $deskripsi_chapter;
    public $isi_chapter;
    public $gambar_chapter;
    
    protected $listeners = [
        'editChapterKategori1',
    ];
    
    public function editChapterKategori1($id)
    {
        // dd($id);
        // $this->deskripsi_chapter = $this->dataChapterKategori1->deskripsi_subkategori;
        // $this->isi_chapter = $this->dataChapterKategori1->isi_subkategori;
        // $this->gambar_chapter = $this->dataChapterKategori1->gambar_subkategori;
    }

    public function render()
    {
        return view('livewire.edit-chapter-kategori1');
    }
}
