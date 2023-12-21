<?php

namespace App\Http\Livewire\TipoAsignatura;

use App\Models\TipoAsignatura;
use Livewire\Component;

class EditarAsignatura extends Component
{
    public $open_editar =false;
    public $tipoasignatura;
    public $nombre;  // variables publicas del formularios // variables publicas del formularios
    protected $rules =[
        'tipoasignatura.nombre' => 'required',

    ];

    public function mount(TipoAsignatura $tipoAsignatura)
    {
        $this->$tipoAsignatura = $tipoAsignatura;
    }
    public function save()
    {
        $this->validate();

        $this->tipoasignatura->save();
        $this->reset(['open_editar',  'nombre']);

        $this->emit('render');
        $this->emit('editar'); //mensaje
    }
    public function render()
    {
        return view('livewire.tipo-asignatura.editar-asignatura');
    }
}



