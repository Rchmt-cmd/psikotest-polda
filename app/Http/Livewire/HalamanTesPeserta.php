<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\SoalTes\SoalTesRepository;

class HalamanTesPeserta extends Component
{
    public $quizNav;

    protected $soalTesRepository;

    public function boot(SoalTesRepository $soalTesRepository)
    {
        $this->soalTesRepository = $soalTesRepository;
    }

    public function render()
    {
        $this->quizNav = $this->soalTesRepository->getAll()->map(function($item){
            return $item->nomor_soal;
        });
        // dd($this->quizNav);
        return view('livewire.halaman-tes-peserta', [
            'daftarSoal' => $this->soalTesRepository->getSoalForPeserta(),
        ])->extends('layouts.app')->section('content');
    }
}
