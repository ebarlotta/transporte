<?php

namespace App\Http\Livewire\Seguimiento;

use Livewire\Component;

class SegumientoComponent extends Component
{
    public function render()
    {
        return view('livewire.seguimiento.segumiento-component')->extends('layouts.adminlte');
    }
}
