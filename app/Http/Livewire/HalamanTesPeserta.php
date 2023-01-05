<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\SoalTes\SoalTesRepository;
use Illuminate\Support\Facades\Session;
use Livewire\WithPagination;
use Symfony\Component\HttpFoundation\Request;

class HalamanTesPeserta extends Component
{
    use WithPagination;

    public $quizNav;
    public $nomor;
    public $singleAnswer;
    public $nomorSoal;

    protected $soalTesRepository;
    protected $queryString = ['nomor'];

    public function mount()
    {
        session(['singleAnswer']);
    }

    public function boot(SoalTesRepository $soalTesRepository)
    {
        $this->soalTesRepository = $soalTesRepository;
    }

    public function updatedSingleAnswer()
    {
        // $answer = $request->formJawaban;
        // session(['singleAnswer.'.$this->nomorSoal.'.nomor' => $this->nomorSoal]);
        // session(['singleAnswer.'.$this->nomorSoal.'.jawaban' => $this->singleAnswer]);
        // session(['singleAnswer.' . $this->nomorSoal => [
        //     'nomor' => $this->nomorSoal,
        //     'jawaban' => $this->singleAnswer,
        // ]]);
        // session()->push('singleAnswer', $this->nomorSoal);
        if (!is_null(session()->has('singleAnswer.' . $this->nomorSoal. '.jawaban.'.$this->singleAnswer))) {
            // session()->put('singleAnswer', $this->nomorSoal);
            session()->put('singleAnswer.' . $this->nomorSoal . '.jawaban', $this->singleAnswer);
        } else {
            session()->push('singleAnswer.' . $this->nomorSoal . '.jawaban', $this->singleAnswer);
        }
        dd(session()->all());
    }

    public function paginationView()
    {
        return 'vendor.pagination.custom';
    }
    
    public function render(Request $request)
    {
        $this->nomorSoal = $request->input('page') ?? '1';
        $check = session()->has('singleAnswer.'.$this->nomorSoal);
        // dd($check);
        if ($check) {
            // session()->put('singleAnswer', $this->nomorSoal);
            session()->put('singleAnswer.'. $this->nomorSoal.'.jawaban', $this->singleAnswer); //kalau sudah ada session
        }else{
            session()->push('singleAnswer.'.$this->nomorSoal.'.jawaban', $this->singleAnswer); //kalau belum ada session
        }
        $this->quizNav = $this->soalTesRepository->getAll()->map(function($item){
            return $item->nomor_soal;
        });
        // dd($this->quizNav);
        return view('livewire.halaman-tes-peserta', [
            'daftarSoal' => $this->soalTesRepository->getSoalForPeserta(),
        ])->extends('layouts.app')->section('content');
    }
}
