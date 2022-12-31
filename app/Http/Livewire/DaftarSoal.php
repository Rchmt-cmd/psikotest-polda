<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use Livewire\Component;
use App\Repositories\SoalTes\SoalTesRepository;

class DaftarSoal extends Component
{
    public $daftarSoalTes;
    public $dataSoal;
    
    protected $soalTesRepository;
    protected $listeners = [
        'closeModal',
        'dataSoalStored' => 'handleDataSoalStored',
        'dataSoalUpdated' => 'handleDataSoalUpdated',
        'refreshData' => '$refresh',
    ];

    public function boot(SoalTesRepository $soalTesRepository)
    {
        $this->soalTesRepository = $soalTesRepository;
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

    public function handleDataSoalUpdated()
    {
        session()->flash('message', 'Soal updated successfully!');
        $this->closeModal();
        $this->emitSelf('refreshData');
    }

    public function delete($id)
    {
        $this->soalTesRepository->delete($id);
        session()->flash('message', 'Contact delete successfully!');
        $this->closeModal();
        $this->emitSelf('refreshData');
    }

    public function handleDataSoalStored()
    {
        session()->flash('message', 'Soal stored successfully!');
        $this->closeModal();
        $this->emitSelf('refreshData');
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
        return view('livewire.daftar-soal')
            ->extends('layouts.app')
            ->section('content');
    }
}
