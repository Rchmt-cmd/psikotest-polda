<?php

namespace App\Http\Livewire;

use App\Models\JawabanPeserta;
use Livewire\Component;
use App\Repositories\SoalTes\SoalTesRepository;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class HalamanTesPeserta extends Component
{
    use WithPagination;

    public $quizNav;
    public $nomor;
    public $singleAnswer;
    public $nomorSoal;

    protected $id_soal;
    protected $jawaban;
    protected $soalTesRepository;
    protected $jawabanPeserta;
    protected $queryString = ['nomor'];

    public function boot(SoalTesRepository $soalTesRepository, JawabanPeserta $jawabanPeserta)
    {
        $this->soalTesRepository = $soalTesRepository;
        $this->jawabanPeserta = $jawabanPeserta;
    }

    public function updatedSingleAnswer()
    {
        // setting variable to store in database;
        $daftarSoal = $this->soalTesRepository->getSoalForPeserta();
        $data = $daftarSoal->map(function ($item) {
            $this->id_soal = $item->toArray();
            return $this->id_soal;
        });
        $this->id_soal = $data[0]['id'];
        $this->jawabanPeserta->updateOrCreate(
            ['id_hasil_tes' => '1', 'id_soal' => $this->id_soal],
            ['jawaban' => $this->singleAnswer]
        );
    }

    public function paginationView()
    {
        return 'vendor.pagination.custom';
    }

    public function render(Request $request)
    {
        $this->nomorSoal = $request->input('page') ?? '1';
        $this->quizNav = $this->soalTesRepository->getAll()->map(function ($item) {
            return $item->nomor_soal;
        });
        $daftarSoal = $this->soalTesRepository->getSoalForPeserta();
        $data = $daftarSoal->map(function ($item) {
            $id_soal = $item->toArray();
            return $id_soal;
        });
        $id_soal = $data[0]['id'];
        $jawaban = $this->jawabanPeserta->where('id_soal', $id_soal)->where('id_hasil_tes', 1)->first();
        if (!is_null($jawaban)) {
            $this->singleAnswer = $jawaban->jawaban;
        }
        return view('livewire.halaman-tes-peserta', [
            'daftarSoal' => $daftarSoal,
        ])->extends('layouts.app')->section('content');
    }
}
