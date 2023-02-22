<?php

namespace App\Http\Livewire;

use App\Repositories\Jadwal\JadwalRepository;
use Livewire\Component;
use App\Repositories\User\UserRepository;

class EditPeserta extends Component
{
    public $nama;
    public $nomor_tes;
    public $no_hp;
    public $jadwal_tes;

    public $idPeserta;

    public $daftar_jadwals;

    protected $userRepository;
    protected $jadwalRepository;

    protected $listeners = [
        'edit',
    ];
    protected $rules = [
        'no_hp' => 'required|unique:users|numeric|digits_between:11,13',
    ];

    public function boot(UserRepository $userRepository, JadwalRepository $jadwalRepository)
    {
        $this->userRepository = $userRepository;
        $this->jadwalRepository = $jadwalRepository;
    }

    public function edit()
    {
        // dd($this->idPeserta);
        $this->nama = $this->idPeserta->name;
        $this->nomor_tes = $this->idPeserta->nomor_tes;
        $this->no_hp = $this->idPeserta->no_hp;
        $this->jadwal_tes = $this->idPeserta->id_jadwal;
    }

    public function resetField()
    {
        $this->nama = '';
        $this->nomor_tes = '';
        $this->no_hp = '';
    }

    public function update()
    {
        $attributes = [];
        // $this->validate();

        $attributes['name'] = $this->nama;
        $attributes['is_admin'] = false;
        $attributes['nomor_tes'] = $this->nomor_tes;
        $attributes['status_tes'] = false;
        $attributes['no_hp'] = $this->no_hp;
        $attributes['id_jadwal'] = $this->jadwal_tes;

        $this->userRepository->update($this->idPeserta->id, $attributes);
        $this->resetField();
        $this->emit('dataPesertaUpdated');
    }

    public function render()
    {
        $this->daftar_jadwals = $this->jadwalRepository->getAll();
        return view('livewire.edit-peserta');
    }
}
