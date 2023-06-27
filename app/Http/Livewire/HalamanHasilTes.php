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

    public function handleEksportData()
    {
        redirect(route('eksport.data.hasil.tes'));
    }

    public function resetHasilTes()
    {
        $this->hasilTes->whereNotNull('id')->delete();
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('removeModalBackdrop');
    }

    public function render()
    {
        $this->dataHasilTesPesertas = $this->hasilTes->get();
        // dd($this->dataHasilTesPesertas[2]->user->name);
        $jumlahSoalKategori1 = $this->soalTesRepository->getAllKategori1()->count();
        $jumlahSoalKategori2 = $this->soalTesRepository->getAllKategori2()->count();
        $jumlahSoalKategori3 = $this->soalTesRepository->getAllKategori3()->count();
        return view('livewire.halaman-hasil-tes', [
            'jumlahSoalKategori1' => $jumlahSoalKategori1,
            'jumlahSoalKategori2' => $jumlahSoalKategori2,
            'jumlahSoalKategori3' => $jumlahSoalKategori3,
        ])
            ->extends('layouts.app')
            ->section('content');
    }
}
