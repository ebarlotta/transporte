<?php

namespace App\Http\Livewire\Sucursal;

use Livewire\Component;

class SucursalComponent extends Component
{
    public function render()
    {
        return view('livewire.sucursal.sucursal-component')->extends('layouts.adminlte');
    }
}
