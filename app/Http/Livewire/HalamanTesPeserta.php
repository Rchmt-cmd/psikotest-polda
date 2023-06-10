<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class HalamanTesPeserta extends Component
{
    public $user_progress;
    
    public function render()
    {
        $this->user_progress = auth()->user()->progres_tes;
        return view('livewire.halaman-tes-peserta')->extends('layouts.app')->section('content');
    }
}
