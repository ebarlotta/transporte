<?php

namespace App\Http\Livewire\Tarifa;

use Livewire\Component;

class TarifaComponent extends Component
{
    public function render()
    {
        return view('livewire.tarifa.tarifa-component')->extends('layouts.adminlte');
    }
}
