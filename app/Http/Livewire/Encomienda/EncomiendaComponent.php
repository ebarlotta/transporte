<?php

namespace App\Http\Livewire\Encomienda;

use Livewire\Component;

class EncomiendaComponent extends Component
{
    public function render()
    {
        return view('livewire.encomienda.encomienda-component')->extends('layouts.adminlte');
    }
}
