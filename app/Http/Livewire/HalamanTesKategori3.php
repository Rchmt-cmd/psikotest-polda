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

class HalamanTesKategori3 extends Component
{
    use WithPagination;

    public $timer;
    public $nomorSoal;
    public $quizNav;
    public $singleAnswer;

    protected $id_soal;
    protected $soalTesRepository;
    protected $jawabanPeserta;
    protected $soalTes;
    
    public function boot(SoalTesRepository $soalTesRepository, JawabanPeserta $jawabanPeserta, SoalTes $soalTes)
    {
        $this->soalTesRepository = $soalTesRepository;
        $this->jawabanPeserta = $jawabanPeserta;
        $this->soalTes = $soalTes;
    }

    public function mount()
    {
        $date = date("Y-m-d H:i:s");
        $hours = MasterDurasiTes::where('id', 3)->first()->durasi_tes;

        $d0 = strtotime(date('Y-m-d 00:00:00'));
        $d1 = strtotime(date('Y-m-d ') . $hours);

        $sumTime = strtotime($date) + ($d1 - $d0);
        $new_time = date("M d, Y H:i:s", $sumTime);
        $this->timer = $new_time;
    }

    public function paginationView()
    {
        return 'vendor.pagination.custom';
    }

    public function updatedSingleAnswer()
    {
        // setting variable to store in database;
        $daftarSoal = $this->soalTesRepository->getSoalKategori3();
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

    public function storeHasilTest()
    {
        // buat query jadi spesifik ke jawaban soal kategori 2 saja
        $allJawaban = $this->jawabanPeserta->with(['soalTes', 'hasilTes.user'])->where('id_hasil_tes', auth()->user()->hasilTes->id)->get();
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
        $attributes['finish'] = date('Y-m-d H:i:s');
        // $attributes['hasil_akhir'] = $hasil;
        $attributes['jumlah_benar_kategori3'] = $jumlahBenar;
        HasilTes::where('id_user', auth()->user()->id)->update($attributes);
        User::where('id', auth()->user()->id)->update(['progres_tes' => 'done', 'status_tes' => 1]);
        $this->dispatchBrowserEvent('clearCookies');
        return redirect('home');
    }
    
    public function render(Request $request)
    {
        $this->nomorSoal = $request->input('page') ?? '1';
        $this->quizNav = $this->soalTesRepository->getAllKategori3()->map(function ($item) {
            return $item->nomor_soal;
        });
        

        $daftarSoal = $this->soalTesRepository->getSoalKategori3();
        $data = $daftarSoal->map(function ($item) {
            $id_soal = $item->toArray();
            return $id_soal;
        });
        $id_soal = $data[0]['id'];
        $jawaban = $this->jawabanPeserta->where('id_soal', $id_soal)->where('id_hasil_tes', auth()->user()->hasilTes->id)->first();
        if (!is_null($jawaban)) {
            $this->singleAnswer = $jawaban->jawaban;
        }
        return view('livewire.halaman-tes-kategori3', [
            'daftarSoal' => $daftarSoal,
        ]);
    }
}
