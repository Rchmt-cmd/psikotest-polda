<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\HasilTes;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\JawabanPeserta;
use App\Repositories\SoalTes\SoalTesRepository;

class HalamanTesPeserta extends Component
{
    use WithPagination;

    public $quizNav;
    public $nomor;
    public $singleAnswer;
    public $nomorSoal;
    public $timer;

    protected $id_soal;
    protected $jawaban;
    protected $soalTesRepository;
    protected $jawabanPeserta;
    protected $queryString = ['nomor'];
    protected $listeners = [
        'storeHasilTest',
    ];

    public function boot(SoalTesRepository $soalTesRepository, JawabanPeserta $jawabanPeserta)
    {
        $this->soalTesRepository = $soalTesRepository;
        $this->jawabanPeserta = $jawabanPeserta;
    }

    public function mount()
    {
        $date = date("Y-m-d H:i:s");
        $hours = auth()->user()->jadwal->durasi_tes;

        $d0 = strtotime(date('Y-m-d 00:00:00'));
        $d1 = strtotime(date('Y-m-d ') . $hours);

        $sumTime = strtotime($date) + ($d1 - $d0);
        $new_time = date("M d, Y H:i:s", $sumTime);
        $this->timer = $new_time; 
    }

    public function storeHasilTest()
    {
        $allJawaban = $this->jawabanPeserta->with(['soalTes', 'hasilTes.user'])->where('id_hasil_tes', auth()->user()->hasilTes->id)->get();
        $jumlahSoal = $this->soalTesRepository->getAll()->count();
        $hasil = 0;
        $jumlahBenar = 0;
        foreach ($allJawaban as $jawaban) {
            if ($jawaban->soalTes->jawaban == $jawaban->jawaban) {
                $bobot = $jawaban->soalTes->bobot;
                $hasil = $hasil + $bobot;
                $jumlahBenar = $jumlahBenar + 1;
            }
        }
        $attributes = [];
        $attributes['finish'] = date('Y-m-d H:i:s');
        $attributes['hasil_akhir'] = $hasil;
        $attributes['jumlah_benar'] = $jumlahBenar;
        HasilTes::where('id_user', auth()->user()->id)->update($attributes);
        User::where('id', auth()->user()->id)->update(['status_tes' => 1]);
        $this->dispatchBrowserEvent('clearCookies');
        return redirect('home');
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
            ['id_hasil_tes' => auth()->user()->hasilTes->id, 'id_soal' => $this->id_soal],
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
        $jawaban = $this->jawabanPeserta->where('id_soal', $id_soal)->where('id_hasil_tes', auth()->user()->hasilTes->id)->first();
        if (!is_null($jawaban)) {
            $this->singleAnswer = $jawaban->jawaban;
        }
        return view('livewire.halaman-tes-peserta', [
            'daftarSoal' => $daftarSoal,
        ])->extends('layouts.app')->section('content');
    }
}
