<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\SoalTes;
use Livewire\Component;
use App\Models\HasilTes;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\JawabanPeserta;
use App\Models\MasterDurasiTes;
use App\Repositories\SoalTes\SoalTesRepository;

class HalamanTesKategori2 extends Component
{
    use WithPagination;

    public $timer;
    public $singleAnswer;
    public $quizNav;
    public $nomorSoal;
    
    protected $id_soal;
    protected $soalTesRepository;
    protected $jawabanPeserta;
    protected $soalTes;
    // protected $queryString = ['nomor'];
    protected $listeners = [
        'storeHasilTest',
    ];

    public function boot(SoalTesRepository $soalTesRepository, JawabanPeserta $jawabanPeserta, SoalTes $soalTes)
    {
        $this->soalTesRepository = $soalTesRepository;
        $this->jawabanPeserta = $jawabanPeserta;
        $this->soalTes = $soalTes;
    }

    public function mount()
    {
        $date = date("Y-m-d H:i:s");
        $hours = MasterDurasiTes::where('id', 2)->first()->durasi_tes;

        $d0 = strtotime(date('Y-m-d 00:00:00'));
        $d1 = strtotime(date('Y-m-d ') . $hours);

        $sumTime = strtotime($date) + ($d1 - $d0);
        $new_time = date("M d, Y H:i:s", $sumTime);
        $this->timer = $new_time;
    }

    public function storeHasilTest()
    {
        // buat query jadi spesifik ke jawaban soal kategori 2 saja
        $allJawaban = JawabanPeserta::with(['soalTes.kategoriSoal', 'hasilTes.user'])->where('id_hasil_tes', auth()->user()->hasilTes->id)->whereHas('soalTes', function ($item) {
            $item->where('id_kategori', 2);
        })->get();
        // $jumlahSoal = $this->soalTesRepository->getAllKategori1()->count();
        // $hasil = 0;
        $jumlahBenar = 0;
        foreach ($allJawaban as $jawaban) {
            if ($jawaban->soalTes->jawaban == $jawaban->jawaban) {
                // $bobot = $jawaban->soalTes->bobot;
                // $hasil = $hasil + $bobot;
                $jumlahBenar = $jumlahBenar + 1;
            }
        }
        $attributes = [];
        // $attributes['finish'] = date('Y-m-d H:i:s');
        // $attributes['hasil_akhir'] = $hasil;
        $attributes['jumlah_benar_kategori2'] = $jumlahBenar;
        HasilTes::where('id_user', auth()->user()->id)->update($attributes);
        $query = User::where('id', auth()->user()->id)->update(['progres_tes' => 3]);
        $this->emit('refreshComponent');
        $this->dispatchBrowserEvent('clearCookies');
        $this->dispatchBrowserEvent('removeModalBackdrop');
    }

    public function updatedSingleAnswer()
    {
        // setting variable to store in database;
        $daftarSoal = $this->soalTesRepository->getSoalKategori2();
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
        $this->quizNav = $this->soalTesRepository->getAllKategori2()->map(function ($item) {
            $jawabanPeserta = $this->jawabanPeserta->where('id_hasil_tes', auth()->user()->hasilTes->id)->where('id_soal', $item->id)->first();
            $statusTes = false;
            if ($jawabanPeserta) {
                $statusTes = true;
            }
            return [$item->nomor_soal, $statusTes];
        });
        $daftarSoal = $this->soalTesRepository->getSoalKategori2();
        
        
        
        $data = $daftarSoal->map(function ($item) {
            $id_soal = $item->toArray();
            return $id_soal;
        });
        $id_soal = $data[0]['id'];
        $jawaban = $this->jawabanPeserta->where('id_soal', $id_soal)->where('id_hasil_tes', auth()->user()->hasilTes->id)->first();
        if (!is_null($jawaban)) {
            $this->singleAnswer = $jawaban->jawaban;
        }
        
        return view('livewire.halaman-tes-kategori2', [
            'daftarSoal' => $daftarSoal,
        ]);
    }
}
