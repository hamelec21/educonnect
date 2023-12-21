<?php

namespace App\Http\Livewire\Curso;

use App\Models\Curso;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    public $search;
    use WithPagination;
    protected $listeners = ['render' => 'render'];

   public function updatingSearch()
     {
        $this->resetPage();
    }
    public function destroy($id)
    {
        Curso::destroy($id);
    }
    public function render()

    {
        $cursos = Curso::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);

        return view('livewire.curso.show',compact('cursos'));
    }
}
