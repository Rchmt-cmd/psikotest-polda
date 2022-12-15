<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\User\UserRepository;

class TambahPeserta extends Component
{
    public $nama;
    public $jenis_kelamin;
    public $tmpt_lahir;
    public $tgl_lahir;
    public $nomor_tes;
    public $email;
    public $no_hp;
    public $alamat;
    
    protected $userRepository;
    
    public function boot(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
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

    public function store()
    {
        $attributes = [];

        $attributes['name'] = $this->nama;
        $attributes['email'] = $this->email;
        $attributes['is_admin'] = false;
        $attributes['password'] = random_int(10000000, 99999999);
        $attributes['nomor_tes'] = $this->nomor_tes;
        $attributes['status_tes'] = false;
        $attributes['jenis_kelamin'] = $this->jenis_kelamin;
        $attributes['tgl_lahir'] = $this->tgl_lahir;
        $attributes['tmpt_lahir'] = $this->tmpt_lahir;
        $attributes['alamat'] = $this->alamat;
        $attributes['no_hp'] = $this->no_hp;

        $this->userRepository->create($attributes);
        $this->resetField();
        $this->emit('dataPesertaStored');
    }

    public function render()
    {
        return view('livewire.tambah-peserta');
    }
}
