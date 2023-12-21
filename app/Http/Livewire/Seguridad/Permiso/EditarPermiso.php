<?php

namespace App\Http\Livewire\Seguridad\Permiso;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class EditarPermiso extends Component
{
    public $open_editar =false;
    public $nombre;
    public $permiso;

    protected $rules = [
        'rol.nombre' => 'required',
    ];

    public function mount(Permission $permiso)
    {
        $this->permiso= $permiso;
    }
    public function save()
    {
        $this->validate();

        $this->permiso->save();
        $this->reset(['open_editar', 'nombre']);

        $this->emit('render');
        $this->emit('editar'); //mensaje
    }
    public function render()
    {
        return view('livewire.seguridad.permiso.editar-permiso');
    }
}
