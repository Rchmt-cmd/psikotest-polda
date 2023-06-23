<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use App\Models\SubKategoriSoal;
use Livewire\Component;
use Livewire\WithPagination;

class SoalsKategori3 extends Component
{
    use WithPagination;

    public $dataSoalKategori3;
    public $dataChapterKategori3;
    public $totalChapter;
    public $totalSoal;

    protected $soalKategori3;
    protected $subKategoriSoal;
    protected $listeners = [
        'dataSoal3Stored' => 'handleDataStored',
        'dataSoal3Updated' => 'handleDataUpdated',
        'dataChapter3Stored' => 'handleChapterStored',
        'dataChapter3Updated' => 'handleChapterUpdated',
        'refreshData' => '$refresh',
        'closeModal'
    ];

    // initial
    public function boot(SoalTes $soalKategori3, SubKategoriSoal $subKategoriSoal)
    {
        $this->soalKategori3 = $soalKategori3;
        $this->subKategoriSoal = $subKategoriSoal;
    }

    public function paginationView()
    {
        return 'vendor.livewire.simple-bootstrap';
    }

    // event handler
    public function handleDataStored()
    {
        $this->emitSelf('refreshData');
        $this->closeModal();
    }
    
    public function handleChapterStored()
    {
        $this->emitSelf('refreshData');
        $this->closeModal();
    }

    public function handleDataUpdated()
    {
        $this->emitSelf('refreshData');
        $this->closeModal();
    }
    
    public function handleChapterUpdated()
    {
        $this->emitSelf('refreshData');
        $this->closeModal();
    }
    
    public function closeModal()
    {
        $this->dataSoalKategori3 = null;
        $this->dataChapterKategori3 = null;
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('removeModalBackdrop');
    }

    // query handler
    public function delete($id)
    {
        $this->soalKategori3->where('id', $id)->delete();
        // session()->flash('message', 'Chapter delete successfully!');
        $this->closeModal();
        $this->emitSelf('refreshData');
    }

    public function deleteChapter($id)
    {
        $this->subKategoriSoal->where('id', $id)->delete();
        $this->closeModal();
        $this->emitSelf('refreshData');
    }

    // button handler
    public function handleEditSoalKategori3(SoalTes $id)
    {
        $this->dataSoalKategori3 = $id;
        $this->emit('editSoalKategori3');
    }

    public function handleEditChapterKategori3(SubKategoriSoal $id)
    {
        $this->dataChapterKategori3 = $id;
        $this->emit('editChapterKategori3');
    }

    public function handleHapusSoalKategori3(SoalTes $id)
    {
        $this->dataSoalKategori3 = $id;
    }

    public function handleHapusChapterKategori3(SubKategoriSoal $id)
    {
        $this->dataChapterKategori3 = $id;
    }

    public function resetSoal(){
        $this->soalKategori3->where('id_kategori', 3)->delete();
        $this->subKategoriSoal->where('id_kategori', 3)->delete();
        $this->dispatchBrowserEvent('removeModalBackdrop');
        $this->closeModal();
    }

    public function render()
    {
        $this->totalChapter = $this->subKategoriSoal->where('id_kategori', 3)->count();
        $this->totalSoal = $this->soalKategori3->where('id_kategori', 3)->count();
        return view('livewire.soals-kategori3', [
            'daftarSoalKategori3' => $this->soalKategori3->where('id_kategori', '3')->paginate(4, ['*'], 'soalPage'),
            'daftarChapterKategori3' => $this->subKategoriSoal->where('id_kategori', '3')->paginate(4, ['*'], 'chapterPage')
        ])
            ->extends('layouts.app')
            ->section('content');
    }
}
