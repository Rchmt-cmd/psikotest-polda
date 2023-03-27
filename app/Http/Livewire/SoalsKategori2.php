<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use Livewire\Component;

class SoalsKategori2 extends Component
{
    public $daftarSoalKategori2;

    protected $soalKategori2;
    protected $listeners = [
        'dataStored',
        'refreshData' => '$refresh',
    ];

    public function dataStored($type)
    {
        $this->emitSelf('refreshData');
    }

    public function handleEditSoalKategori2($id)
    {
        $this->emit('editSoalKategori2', $id);
    }

    public function boot(SoalTes $soalKategori2)
    {
        $this->soalKategori2 = $soalKategori2->where('id_kategori', '2')->get();
    }
    public function render()
    {
        $this->daftarSoalKategori2 = $this->soalKategori2;
        return view('livewire.soals-kategori2');
    }
}
