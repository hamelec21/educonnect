<?php

namespace App\Http\Livewire\Seguridad\Roles;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ShowRol extends Component
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
        Role::destroy($id);
    }

    public function render()
    {
        $roles = Role::all();

        return view('livewire.seguridad.roles.show-rol',compact('roles'));
    }
}
