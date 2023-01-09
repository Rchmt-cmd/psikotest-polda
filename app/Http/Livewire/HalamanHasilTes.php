<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HalamanHasilTes extends Component
{
    public function render()
    {
        return view('livewire.halaman-hasil-tes')
            ->extends('layouts.app')
            ->section('content');
    }
}
