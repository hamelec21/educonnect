<?php

namespace App\Http\Livewire\Seguridad\Roles;


use Livewire\Component;
use Spatie\Permission\Models\Role;

class CrearRol extends Component
{
    public $open_crear =false;
    public $nombre ; // variables publicas del formularios
    protected $rules = [
        'nombre' => 'required'
    ];

    public function save()
    {
        $this-> validate();
        Role::create([
            'name' => $this->nombre,
            'guard_name' => 'web'

        ]);
        $this->reset(['open_crear', 'nombre']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
    }

    public function render()
    {
        return view('livewire.seguridad.roles.crear-rol');
    }
}
