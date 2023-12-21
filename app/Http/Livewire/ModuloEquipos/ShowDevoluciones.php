<?php

namespace App\Http\Livewire\ModuloEquipos;

use App\Models\Devolucion_equipo;
use Livewire\Component;
use Livewire\WithPagination;

class ShowDevoluciones extends Component
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
        $devoluciones = Devolucion_equipo::all();
        return view('livewire.modulo-equipos.show-devoluciones',compact('devoluciones'));
    }
}
