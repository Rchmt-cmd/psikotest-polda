<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use App\Models\SubKategoriSoal;
use App\Repositories\SoalTes\SoalTesRepository;
use Livewire\Component;
use Livewire\WithPagination;

class SoalsKategori1 extends Component
{
    use WithPagination;
    // public $daftarChapterKategori1;
    public $dataChapterKategori1;
    public $dataSoalKategori1;
    public $totalSoal;
    public $totalChapter;

    protected $subKategoriSoal;
    protected $soalTes;
    protected $listeners = [
        'dataChapterStored' => 'handleDataChapterStored',
        'dataChapterUpdated' => 'handleDataChapterUpdated',
        'dataSoalStored' => 'handleDataSoalStored',
        'dataSoal1Updated' => 'handleDataSoalUpdated',
        'refreshData' => '$refresh',
        'closeModal'
    ];

    // initial
    public function boot(SubKategoriSoal $subKategoriSoal, SoalTes $soalTes)
    {   
        $this->subKategoriSoal = $subKategoriSoal;
        $this->soalTes = $soalTes;
    }

    public function paginationView()
    {
        return 'vendor.pagination.simple-bootstrap-4';
    }

    // event handler
    public function handleDataChapterStored()
    {
        $this->emitSelf('refreshData');
        $this->closeModal();
    }

    public function handleDataChapterUpdated()
    {
        $this->emitSelf('refreshData');
        $this->closeModal();
    }

    public function handleDataSoalStored()
    {
        $this->emitSelf('refreshData');
        $this->closeModal();
    }
    
    public function handleDataSoalUpdated()
    {
        $this->emitSelf('refreshData');
        $this->closeModal();
    }


    public function closeModal()
    {
        $this->dataChapterKategori1 = null;
        $this->dataSoalKategori1 = null;
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('removeModalBackdrop');
    }

    // query handler
    public function delete($id)
    {
        $this->subKategoriSoal->where('id', $id)->delete();
        // session()->flash('message', 'Chapter delete successfully!');
        $this->closeModal();
        $this->emitSelf('refreshData');
    }
    
    public function deleteSoalKategori1($id)
    {
        $this->soalTes->where('id', $id)->delete();
        // session()->flash('message', 'Chapter delete successfully!');
        $this->closeModal();
        $this->emitSelf('refreshData');
    }

    // button handler
    public function handleEditChapterKategori1(SubKategoriSoal $id)
    {
        $this->dataChapterKategori1 = $id;
        $this->emit('editChapterKategori1');
    }

    public function handleHapusChapterKategori1(SubKategoriSoal $id)
    {
        $this->dataChapterKategori1 = $id;
    }

    public function handleEditSoal(SoalTes $id)
    {
        $this->dataSoalKategori1 = $id;
        $this->emit('editSoalKategori1');
    }

    public function handleHapusSoal(SoalTes $id)
    {
        $this->dataSoalKategori1 = $id;
    }

    public function render()
    {
        // $this->daftarChapterKategori1 = $this->subKategoriSoal->paginate(4);
        // dd($this->daftarChapterKategori1);
        $this->totalChapter = $this->subKategoriSoal->where('id_kategori', '1')->count();
        $this->totalSoal = $this->soalTes->where('id_kategori', '1')->count();
        return view('livewire.soals-kategori1', [
            'daftarChapterKategori1' => $this->subKategoriSoal->where('id_kategori', 1)->paginate(4, ['*'], 'chapterPage'),
            'daftarSoalTes' => $this->soalTes->where('id_kategori', 1)->paginate(4, ['*'], 'soalPage'),
        ])->extends('layouts.app')
        ->section('content');
    }
}
