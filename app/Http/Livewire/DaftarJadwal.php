<?php

namespace App\Http\Livewire;

use App\Models\Jadwal;
use Livewire\Component;
use App\Repositories\Jadwal\JadwalRepository;

class DaftarJadwal extends Component
{
    protected $jadwalRepository;
    public $idJadwal;
    public $dataJadwal;

    public $daftarJadwals;
    public $tanggalTes;
    public $waktuMulaiAkses;
    public $waktuSelesaiAkses;
    public $jam;
    public $menit;
    public $detik;

    protected $listeners = [
        'refreshData' => '$refresh',
        'closeModal'
    ];

    public function handleDeleteJadwal(Jadwal $dataJadwal)
    {
        $this->dataJadwal = $dataJadwal;
    }

    public function delete($id)
    {
        $this->jadwalRepository->delete($id);
        $this->closeModal();
        $this->emitSelf('refreshData');
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('removeModalBackdrop');
    }

    public function resetField()
    {
        $this->tanggalTes = '';
        $this->waktuMulaiAkses = '';
        $this->waktuSelesaiAkses = '';
        $this->jam = '';
        $this->menit = '';
        $this->detik = '';
    }

    public function closeModal()
    {
        $this->resetField();
        $this->dataJadwal = null;
        $this->idJadwal = null;
    }

    public function store()
    {
        $durasi_tes = date('H:i:s', strtotime(strval($this->jam . ':' . $this->menit . ':' . $this->detik)));
        $attributes = [];
        $attributes['tanggal_tes'] = $this->tanggalTes;
        $attributes['waktu_mulai_akses'] = $this->waktuMulaiAkses;
        $attributes['waktu_selesai_akses'] = $this->waktuSelesaiAkses;
        $attributes['durasi_tes'] = $durasi_tes;

        $this->jadwalRepository->create($attributes);
        $this->resetField();
        $this->emitSelf('refreshData');
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('removeModalBackdrop');
    }

    public function handleEditJadwal(Jadwal $id)
    {
        $jam = date('H', strtotime($id->durasi_tes));
        $menit = date('i', strtotime($id->durasi_tes));
        $detik = date('s', strtotime($id->durasi_tes));
        $this->idJadwal = $id->id;
        $this->tanggalTes = $id->tanggal_tes;
        $this->waktuMulaiAkses = $id->waktu_mulai_akses;
        $this->waktuSelesaiAkses = $id->waktu_selesai_akses;
        $this->jam = $jam;
        $this->menit = $menit;
        $this->detik = $detik;
    }

    public function edit()
    {
        $durasi_tes = date('H:i:s', strtotime(strval($this->jam . ':' . $this->menit . ':' . $this->detik)));
        $attributes = [];
        $attributes['tanggal_tes'] = $this->tanggalTes;
        $attributes['waktu_mulai_akses'] = $this->waktuMulaiAkses;
        $attributes['waktu_selesai_akses'] = $this->waktuSelesaiAkses;
        $attributes['durasi_tes'] = $durasi_tes;

        // dd($this->idJadwal);

        $this->jadwalRepository->update($this->idJadwal, $attributes);
        $this->emitSelf('refreshData');
        session()->flash('message', 'Jadwal berhasil diubah');
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('removeModalBackdrop');
    }

    public function boot(JadwalRepository $jadwalRepository)
    {
        $this->jadwalRepository = $jadwalRepository;
    }

    public function render()
    {
        $this->daftarJadwals = $this->jadwalRepository->getAll();
        return view('livewire.daftar-jadwal');
    }
}
