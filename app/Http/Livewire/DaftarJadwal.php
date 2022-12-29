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
    public $waktuMulai;
    public $waktuSelesai;

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
        $this->waktuMulai = '';
        $this->waktuSelesai = '';
    }

    public function closeModal()
    {
        $this->resetField();
        $this->dataJadwal = null;
        $this->idJadwal = null;
    }

    public function store()
    {
        $attributes = [];
        $attributes['tanggal_tes'] = $this->tanggalTes;
        $attributes['waktu_mulai'] = $this->waktuMulai;
        $attributes['waktu_selesai'] = $this->waktuSelesai;

        $this->jadwalRepository->create($attributes);
        $this->resetField();
        $this->emitSelf('refreshData');
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('removeModalBackdrop');
    }

    public function handleEditJadwal(Jadwal $id)
    {
        $this->idJadwal = $id->id;
        $this->tanggalTes = $id->tanggal_tes;
        $this->waktuMulai = $id->waktu_mulai;
        $this->waktuSelesai = $id->waktu_selesai;
    }

    public function edit()
    {
        $attributes = [];
        $attributes['tanggal_tes'] = $this->tanggalTes;
        $attributes['waktu_mulai'] = $this->waktuMulai;
        $attributes['waktu_selesai'] = $this->waktuSelesai;

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
