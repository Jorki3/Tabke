<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Table extends Component
{
    public $headers = [
        'Nombre',
        'Puesto',
        'Fecha de nacimiento',
        'Estado'
    ];

    public function render()
    {
        return view('livewire.table');
    }
}
