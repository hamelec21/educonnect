<?php

namespace App\Http\Livewire\Seguridad\Usuario;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
class ShowUsuario extends Component
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
        User::destroy($id);
    }

    public function render()
    {
        $usuarios = User::buscar($this->search)
        ->orderBy('id','ASC')
        ->paginate(10);

        return view('livewire.seguridad.usuario.show-usuario',compact('usuarios'));
    }
}
