<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Repositories\User\UserRepository;

class DaftarPeserta extends Component
{
    protected $userRepository;
    public $users;
    public $idPeserta;

    protected $listeners = [
        'refreshData' => '$refresh',
        'closeModal',
        'dataPesertaStored' => 'handleDataPesertaStored',
        'dataPesertaUpdated' => 'handleDataPesertaUpdated',
        'handleEditPeserta',
    ];

    public function handleDataPesertaUpdated()
    {
        session()->flash('message', 'Contact updated successfully!');
        $this->closeModal();
        $this->emitSelf('refreshData');
    }

    public function handleEditPeserta(User $id)
    {
        $this->idPeserta = $id;
        $this->emit('edit');
    }

    public function handleHapusPeserta(User $id)
    {
        $this->idPeserta = $id;
    }

    public function handleEksportData()
    {
        redirect(route('eksport.data.peserta'));
    }

    public function delete($id)
    {
        $this->userRepository->delete($id);
        session()->flash('message', 'Contact delete successfully!');
        $this->closeModal();
        $this->emitSelf('refreshData');
    }

    public function handleLihatPeserta(User $id)
    {
        $this->idPeserta = $id;
    }

    public function closeModal()
    {
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('removeModalBackdrop');
        $this->idPeserta = null;
    }

    public function handleDataPesertaStored()
    {
        session()->flash('message', 'Contact created successfully!');
        $this->closeModal();
        $this->emitSelf('refreshData');
    }

    public function boot(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function render()
    {
        $this->users = $this->userRepository->getAll();
        return view('livewire.daftar-peserta')
            ->extends('layouts.app')
            ->section('content');
    }
}
