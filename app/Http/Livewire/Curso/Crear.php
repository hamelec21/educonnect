<?php

namespace App\Http\Livewire\Curso;

use App\Models\Curso;
use Livewire\Component;

class Crear extends Component
{

    public $open_crear =false;
    public $nombre ; // variables publicas del formularios
    protected $rules = [
        'nombre' => 'required'
    ];


    public function save()
    {
        $this-> validate();
        Curso::create([
            'nombre' => $this->nombre,
        ]);
        $this->reset(['open_crear', 'nombre']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
    }


    public function render()
    {
        return view('livewire.curso.crear');
    }
}
