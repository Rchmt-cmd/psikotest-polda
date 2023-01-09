<?php

namespace App\Http\Livewire;

use App\Repositories\Jadwal\JadwalRepository;
use Livewire\Component;
use App\Repositories\User\UserRepository;

class EditPeserta extends Component
{
    public $nama;
    public $jenis_kelamin;
    public $tmpt_lahir;
    public $tgl_lahir;
    public $nomor_tes;
    public $email;
    public $no_hp;
    public $alamat;
    public $jadwal_tes;

    public $idPeserta;

    public $daftar_jadwals;

    protected $userRepository;
    protected $jadwalRepository;

    protected $listeners = [
        'edit',
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
        $this->jenis_kelamin = $this->idPeserta->jenis_kelamin;
        $this->tmpt_lahir = $this->idPeserta->tmpt_lahir;
        $this->tgl_lahir = $this->idPeserta->tgl_lahir;
        $this->nomor_tes = $this->idPeserta->nomor_tes;
        $this->email = $this->idPeserta->email;
        $this->no_hp = $this->idPeserta->no_hp;
        $this->alamat = $this->idPeserta->alamat;
        $this->jadwal_tes = $this->idPeserta->id_jadwal;
    }

    public function resetField()
    {
        $this->nama = '';
        $this->jenis_kelamin = '';
        $this->tmpt_lahir = '';
        $this->tgl_lahir = '';
        $this->nomor_tes = '';
        $this->email = '';
        $this->no_hp = '';
        $this->alamat = '';
    }

    public function update()
    {
        $attributes = [];

        $attributes['name'] = $this->nama;
        $attributes['email'] = $this->email;
        $attributes['is_admin'] = false;
        $attributes['nomor_tes'] = $this->nomor_tes;
        $attributes['status_tes'] = false;
        $attributes['jenis_kelamin'] = $this->jenis_kelamin;
        $attributes['tgl_lahir'] = $this->tgl_lahir;
        $attributes['tmpt_lahir'] = $this->tmpt_lahir;
        $attributes['alamat'] = $this->alamat;
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
