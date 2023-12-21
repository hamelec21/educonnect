<?php

namespace App\Http\Livewire\Curso;

use App\Models\Curso;
use Livewire\Component;

class Editar extends Component
{

    public $open_editar =false;
    public $curso;
    public $nombre;  // variables publicas del formularios // variables publicas del formularios
    protected $rules =[
        'curso.nombre' => 'required',

    ];

    public function mount(Curso $curso)
    {
        $this->curso = $curso;
    }
    public function save()
    {
        $this->validate();

        $this->curso->save();
        $this->reset(['open_editar',  'nombre']);

        $this->emit('render');
        $this->emit('editar'); //mensaje
    }




    public function render()
    {
        return view('livewire.curso.editar');
    }
}
