<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LihatPeserta extends Component
{
    public $idPeserta;

    public function mount($idPeserta)
    {
        $this->$idPeserta = $idPeserta;
    }
    
    public function render()
    {
        return view('livewire.lihat-peserta');
    }
}
