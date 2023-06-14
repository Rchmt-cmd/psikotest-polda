<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use Livewire\Component;
use Livewire\WithPagination;

class SoalsKategori2 extends Component
{
    use WithPagination;

    public $totalSoalKategori2;
    public $dataSoalKategori2;

    protected $soalKategori2;
    protected $listeners = [
        'dataStored',
        'closeModal',
        'dataSoal2Updated' => 'handleDataSoalUpdated',
        'refreshData' => '$refresh',
    ];

    // initial
    public function boot(SoalTes $soalKategori2)
    {
        $this->soalKategori2 = $soalKategori2;
    }

    public function paginationView()
    {
        return 'vendor.livewire.simple-bootstrap';   
    }

    // event handler
    public function dataStored($type)
    {
        $this->emitSelf('refreshData');
        $this->closeModal();
    }
    
    public function closeModal()
    {
        $this->dataSoalKategori2 = null;
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('removeModalBackdrop');
    }

    public function handleDataSoalUpdated()
    {
        $this->emitSelf('refreshData');
        $this->closeModal();
    }

    // query handler
    public function delete($id)
    {
        $this->soalKategori2->where('id', $id)->delete();
        // session()->flash('message', 'Chapter delete successfully!');
        $this->closeModal();
        $this->emitSelf('refreshData');
    }

    // button handler
    public function handleEditSoalKategori2(SoalTes $id)
    {
        $this->dataSoalKategori2 = $id;
        $this->emit('editSoalKategori2');
    }

    public function handleHapusSoalKategori2(SoalTes $id)
    {
        $this->dataSoalKategori2 = $id;
    }

    public function resetSoal(){
        $this->soalKategori2->where('id_kategori', 2)->delete();
        $this->dispatchBrowserEvent('removeModalBackdrop');
        $this->closeModal();
    }

    public function render()
    {
        $this->totalSoalKategori2 = $this->soalKategori2->where('id_kategori', '2')->count();
        return view('livewire.soals-kategori2', [
            'daftarSoalKategori2' => $this->soalKategori2->where('id_kategori', '2')->paginate(4)
        ])->extends('layouts.app')->section('content');
    }
}
