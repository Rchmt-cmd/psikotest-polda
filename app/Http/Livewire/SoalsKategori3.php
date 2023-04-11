<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use Livewire\Component;
use Livewire\WithPagination;

class SoalsKategori3 extends Component
{
    use WithPagination;

    public $dataSoalKategori3;

    protected $soalKategori3;
    protected $listeners = [
        'dataSoal3Stored' => 'handleDataStored',
        'refreshData' => '$refresh',
    ];

    // initial
    public function boot(SoalTes $soalKategori3)
    {
        $this->soalKategori3 = $soalKategori3;
    }

    public function paginationView()
    {
        return 'vendor.pagination.simple-bootstrap-4';
    }

    // event handler
    public function handleDataStored()
    {
        $this->emitSelf('refreshData');
        $this->closeModal();
    }

    public function closeModal()
    {
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('removeModalBackdrop');
    }

    // query handler
    // button handler
    public function handleEditSoalKategori3(SoalTes $id)
    {
        $this->dataSoalKategori3 = $id;
        $this->emit('editSoalKategori3');
    }

    public function render()
    {
        return view('livewire.soals-kategori3', [
            'daftarSoalKategori3' => $this->soalKategori3->where('id_kategori', '3')->paginate(4)
        ])
            ->extends('layouts.app')
            ->section('content');
    }
}
