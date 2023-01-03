<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use Livewire\Component;
use App\Repositories\SoalTes\SoalTesRepository;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class HalamanTesPeserta extends Component
{
    use WithPagination;

    // public $daftarSoal;

    protected $soalTesRepository;
    protected $paginationTheme = 'bootstrap';

    public function boot(SoalTesRepository $soalTesRepository)
    {
        $this->soalTesRepository = $soalTesRepository;
    }

    public function render()
    {
        // $this->daftarSoal = $this->soalTesRepository->getAll();
        return view('livewire.halaman-tes-peserta', [
            'daftarSoal' => $this->soalTesRepository->getSoalForPeserta(),
        ])->extends('layouts.app')->section('content');
    }
}
