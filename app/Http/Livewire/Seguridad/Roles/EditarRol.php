<?php

namespace App\Http\Livewire\Seguridad\Roles;

use App\Models\Role;
use Livewire\Component;

class EditarRol extends Component
{
    public $open_editar =false;
    public $nombre;
    public $rol;

    protected $rules = [
        'rol.nombre' => 'required',
    ];

    public function mount(Role $rol)
    {
        $this->rol= $rol;
    }
    public function save()
    {
        $this->validate();

        $this->rol->save();
        $this->reset(['open_editar', 'nombre']);

        $this->emit('render');
        $this->emit('editar'); //mensaje
    }
        public function render()
    {
        return view('livewire.seguridad.roles.editar-rol');
    }
}
