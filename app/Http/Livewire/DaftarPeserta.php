<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DaftarPeserta extends Component
{
    public function render()
    {
        return view('livewire.daftar-peserta')
            ->extends('layouts.app')
            ->section('content');
    }
}
