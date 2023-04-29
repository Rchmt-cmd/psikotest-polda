<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HalamanTesPeserta extends Component
{

    public function render()
    {
        return view('livewire.halaman-tes-peserta')->extends('layouts.app')->section('content');
    }
}
