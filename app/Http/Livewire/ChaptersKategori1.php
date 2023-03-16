<?php

namespace App\Http\Livewire;

use App\Models\SubKategoriSoal;
use Livewire\Component;

class ChaptersKategori1 extends Component
{
    public $daftarChapterKategori1;
    public $dataChapterKategori1;

    protected $subKategoriSoal;
    protected $listeners = [
        'dataChapterStored' => 'handleDataChapterStored',
        'refreshData' => '$refresh',
    ];

    public function boot(SubKategoriSoal $subKategoriSoal)
    {
        $this->subKategoriSoal = $subKategoriSoal;
    }

    public function handleDataChapterStored()
    {
        $this->emitSelf('refreshData');
        $this->emit('dataStored', 'Chapter');
    }

    public function handleEditChapterKategori1($id)
    {
        $this->emit('editChapterKategori1', $id);
    }

    public function render()
    {
        $this->daftarChapterKategori1 = $this->subKategoriSoal->all();
        return view('livewire.chapters-kategori1');
    }
}
