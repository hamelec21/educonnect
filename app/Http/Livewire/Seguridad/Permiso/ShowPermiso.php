<?php

namespace App\Http\Livewire\Seguridad\Permiso;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;

class ShowPermiso extends Component
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
        Permission::destroy($id);
    }
    public function render()
    {
        $permisos= Permission::all();

        return view('livewire.seguridad.permiso.show-permiso',compact('permisos'));
    }
}
