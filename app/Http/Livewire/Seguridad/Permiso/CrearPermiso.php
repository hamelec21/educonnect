<?php

namespace App\Http\Livewire\Seguridad\Permiso;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class CrearPermiso extends Component
{
    public $open_crear =false;
    public $nombre ; // variables publicas del formularios
    protected $rules = [
        'nombre' => 'required'
    ];
    public function save()
    {
        $this-> validate();
        Permission::create([
            'name' => $this->nombre,
            'guard_name' => 'web'
        ]);
        $this->reset(['open_crear', 'nombre']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
    }
    public function render()
    {
        return view('livewire.seguridad.permiso.crear-permiso');
    }
}
