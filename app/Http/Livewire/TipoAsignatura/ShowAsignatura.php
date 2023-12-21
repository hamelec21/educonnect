<?php

namespace App\Http\Livewire\TipoAsignatura;

use Livewire\Component;

class ShowAsignatura extends Component
{
    <?php

namespace App\Http\Livewire\Semestres;

use App\Models\Semestre;
use Livewire\Component;
use Livewire\WithPagination;

class ShowSemestres extends Component
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
        $tipoasignaturas = Semestre::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.tipo-asignatura.show-asignatura');
    }
}


}
