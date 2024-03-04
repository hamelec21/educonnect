<?php

namespace App\Http\Livewire\TipoAsignatura;

use App\Models\TipoAsignatura;
use Livewire\Component;
use Livewire\WithPagination;

class ShowAsignatura extends Component
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
        $tipoasignaturas = TipoAsignatura::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.tipo-asignatura.show-asignatura',compact('tipoasignaturas'));
    }
}



