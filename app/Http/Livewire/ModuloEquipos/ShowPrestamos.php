<?php

namespace App\Http\Livewire\ModuloEquipos;

use App\Models\Prestamo_equipo;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPrestamos extends Component
{
    use WithPagination;

    public $search;
    protected $listeners = ['render' => 'render'];

    public function updatingSearch()
     {
        $this->resetPage();
    }

    public function render()
    {

    //crear una consulta  para buscar por rut o nombre del alumno

        $prestamos = Prestamo_equipo::all();
        return view('livewire.modulo-equipos.show-prestamos',compact('prestamos'));
    }
}
