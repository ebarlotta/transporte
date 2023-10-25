<?php

namespace App\Http\Livewire\Encomienda;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\Encomienda;


class EncomiendaComponent extends Component
{

    public $ContClientes=0;
    public $ContEncomiendas=0;

    public function render()
    {
        $this->ContClientes=Cliente::count();
        $this->ContEncomiendas=Encomienda::count();
        return view('livewire.encomienda.enco-component')->extends('layouts.adminlte');
    }
}
