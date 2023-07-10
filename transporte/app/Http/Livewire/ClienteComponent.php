<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;

class ClienteComponent extends Component
{
    public $clientes;

    public function render()
    {
        $this->clientes = Cliente::all();
        //dd($this->clientes);
        return view('livewire.cliente-component');
    }
}
