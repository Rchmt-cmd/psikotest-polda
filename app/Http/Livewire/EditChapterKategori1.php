<?php

namespace App\Http\Livewire;

use App\Models\SubKategoriSoal;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditChapterKategori1 extends Component
{
    use WithFileUploads;
    public $dataChapterKategori1;
    public $deskripsi_chapter;
    public $isi_chapter;
    public $gambar_chapter;
    
    protected $subKategoriSoal;
    protected $listeners = [
        'editChapterKategori1',
    ];

    public function boot(SubKategoriSoal $subKategoriSoal)
    {
        $this->subKategoriSoal = $subKategoriSoal;
    }
    
    public function editChapterKategori1()
    {
        $this->deskripsi_chapter = $this->dataChapterKategori1->deskripsi_subkategori;
        $this->isi_chapter = $this->dataChapterKategori1->isi_subkategori;
        $this->gambar_chapter = $this->dataChapterKategori1->gambar_subkategori;
    }

    public function resetField()
    {
        $this->deskripsi_chapter = '';
        $this->isi_chapter = '';
        $this->gambar_chapter = '';
    }
    
    public function update()
    {
        $attributes = [];
        $attributes['deskripsi_subkategori'] = $this->deskripsi_chapter;
        $attributes['isi_subkategori'] = $this->isi_chapter;
        $attributes['gambar_subkategori'] = (!empty($this->gambar_chapter)) ? $this->gambar_chapter->store('files/chapter_kategori_1', 'public') : ""; 


        $this->subKategoriSoal->where('id', $this->dataChapterKategori1->id)->update($attributes);
        $this->resetField();
        $this->emit('dataChapter1Updated');
    }

    public function render()
    {
        return view('livewire.edit-chapter-kategori1');
    }
}
