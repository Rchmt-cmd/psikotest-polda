<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class HalamanTesPeserta extends Component
{
    public $user_progress;

    public function mount()
    {
        $this->user_progress = auth()->user()->progress_tes;
    }

    public function render()
    {
        return view('livewire.halaman-tes-peserta')->extends('layouts.app')->section('content');
    }
}
