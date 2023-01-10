<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HasilTes;
use App\Repositories\SoalTes\SoalTesRepository;

class HalamanHasilTes extends Component
{
    protected $hasilTes;
    protected $soalTesRepository;
    public $dataHasilTesPesertas;

    public function boot(HasilTes $hasilTes, SoalTesRepository $soalTesRepository)
    {
        $this->hasilTes = $hasilTes;
        $this->soalTesRepository = $soalTesRepository;
    }

    public function render()
    {
        $this->dataHasilTesPesertas = $this->hasilTes->get();
        $jumlahSoal = $this->soalTesRepository->getAll()->count();
        return view('livewire.halaman-hasil-tes', [
            'jumlahSoal' => $jumlahSoal,
        ])
            ->extends('layouts.app')
            ->section('content');
    }
}
