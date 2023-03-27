<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use App\Models\SubKategoriSoal;
use Livewire\Component;
use App\Repositories\SoalTes\SoalTesRepository;

class DaftarSoal extends Component
{
    public $daftarSoalTes;
    public $dataSoal;
    public $daftarChapter;
    public $dataChapterKategori1;
    public $dataSoalKategori2;

    protected $soalTesRepository;
    protected $subKategoriSoal;
    protected $listeners = [
        'closeModal',
        'dataStored' => 'handleDataStored',
        'dataSoalUpdated' => 'handleDataSoalUpdated',
        'editChapterKategori1' => 'handleEditChapterKategori1',
        'editSoalKategori2' => 'handleEditSoalKategori2',
        'refreshData' => '$refresh',
    ];

    public function boot(SoalTesRepository $soalTesRepository, SubKategoriSoal $subKategoriSoal)
    {
        $this->soalTesRepository = $soalTesRepository;
        $this->subKategoriSoal = $subKategoriSoal;
    }

    public function handleHapusSoal(SoalTes $id)
    {
        $this->dataSoal = $id;
    }

    public function handleEditSoal(SoalTes $id)
    {
        $this->dataSoal = $id;
        $this->emit('editSoal');
    }

    public function handleEditChapterKategori1($dataChapterKategori1)
    {
        $this->dataChapterKategori1 = $dataChapterKategori1;
        $this->emit('editChapterKategori1', $this->dataChapterKategori1);
        // dd($this->dataChapterKategori1);
    }

    public function handleDataSoalUpdated()
    {
        session()->flash('message', 'Soal updated successfully!');
        $this->closeModal();
        $this->emitSelf('refreshData');
    }

    public function delete($id)
    {
        $this->soalTesRepository->delete($id);
        session()->flash('message', 'Soal delete successfully!');
        $this->closeModal();
        $this->emitSelf('refreshData');
    }

    public function handleDataStored($type)
    {
        session()->flash('message', $type . ' stored successfully!');
        $this->closeModal();
        $this->emitSelf('refreshData');
    }

    public function handleEditSoalKategori2(SoalTes $id)
    {
        $this->dataSoalKategori2 = $id;
        $this->emit('editSoal');
    }

    public function closeModal()
    {
        $this->dataSoal = null;
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('removeModalBackdrop');
    }

    public function render()
    {
        $this->daftarSoalTes = $this->soalTesRepository->getAll();
        $this->daftarChapter = $this->subKategoriSoal->all();

        return view('livewire.daftar-soal')
            ->extends('layouts.app')
            ->section('content');
    }
}
