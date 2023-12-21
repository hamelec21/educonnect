<?php

namespace App\Http\Livewire\Alumno;

use App\Models\Alumno;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = ['render' => 'render'];

    public function updatingSearch()
     {
        $this->resetPage();
    }

    public function destroy($id)
    {
        Alumno::destroy($id);
    }




    public function render()
    {
         $fichas = Alumno::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);
        return view('livewire.alumno.show',compact('fichas'));
    }
}
