<?php

namespace App\Http\Livewire\Semestres;

use App\Models\Semestre;
use Livewire\Component;

class CrearSemestre extends Component
{
    public $open_crear =false;
    public $nombre ; // variables publicas del formularios
    protected $rules = [
        'nombre' => 'required'
    ];


    public function save()
    {
        $this-> validate();
        Semestre::create([
            'nombre' => $this->nombre,
        ]);
        $this->reset(['open_crear', 'nombre']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
    }
    public function render()
    {
        return view('livewire.semestres.crear-semestre');
    }
}
