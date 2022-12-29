<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\SoalTes\SoalTesRepository;

class DaftarSoal extends Component
{
    protected $soalTesRepository;

    public $daftarSoalTes;

    public function boot(SoalTesRepository $soalTesRepository)
    {
        $this->soalTesRepository = $soalTesRepository;
    }

    public function render()
    {
        $this->daftarSoalTes = $this->soalTesRepository->getAll();
        return view('livewire.daftar-soal')
            ->extends('layouts.app')
            ->section('content');
    }
}
