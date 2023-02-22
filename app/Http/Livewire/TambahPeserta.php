<?php

namespace App\Http\Livewire;

use App\Models\Jadwal;
use App\Repositories\Jadwal\JadwalRepository;
use Livewire\Component;
use App\Repositories\User\UserRepository;

class TambahPeserta extends Component
{
    public $nama;
    public $nomor_tes;
    public $no_hp;
    public $jadwal_tes;
    protected $old_password;

    public $daftar_jadwals;
    
    protected $userRepository;
    protected $jadwalRepository;
    protected $rules = [
        'no_hp' => 'required|numeric|digits_between:11,13|unique:users',
    ];
    
    public function boot(UserRepository $userRepository, JadwalRepository $jadwalRepository)
    {
        $this->userRepository = $userRepository;
        $this->jadwalRepository = $jadwalRepository;
    }
    
    public function resetField()
    {
        $this->nama = '';
        $this->nomor_tes = '';
        $this->no_hp = '';
        $this->jadwal_tes = '';

    }

    public function store()
    {
        $this->old_password = random_int(10000000, 99999999);
        $this->validate();

        $attributes = [];

        $attributes['name'] = $this->nama;
        $attributes['is_admin'] = false;
        $attributes['password'] = bcrypt($this->old_password);
        $attributes['old_password'] = $this->old_password;
        $attributes['nomor_tes'] = $this->nomor_tes;
        $attributes['status_tes'] = false;
        $attributes['no_hp'] = $this->no_hp;
        $attributes['id_jadwal'] = $this->jadwal_tes;

        $this->userRepository->create($attributes);
        $this->resetField();
        $this->emit('dataPesertaStored');
    }

    public function render()
    {
        $this->daftar_jadwals = $this->jadwalRepository->getAll();
        return view('livewire.tambah-peserta');
    }
}
