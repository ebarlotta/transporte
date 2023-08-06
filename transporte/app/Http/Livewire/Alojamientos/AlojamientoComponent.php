<?php

namespace App\Http\Livewire\Alojamientos;

use App\Models\Alojamiento;
use Livewire\Component;

class AlojamientoComponent extends Component
{
    public $alojamientos;

    public function render()
    {
        $this->alojamientos = Alojamiento::all();
        return view('livewire.alojamientos.alojamiento-component')->extends('layouts.adminlte');
    }
}
