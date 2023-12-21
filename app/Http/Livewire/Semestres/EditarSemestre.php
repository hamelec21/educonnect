<?php

namespace App\Http\Livewire\Semestres;

use App\Models\Semestre;
use Livewire\Component;

class EditarSemestre extends Component
{
    public $open_editar =false;
    public $semestre;
    public $nombre;  // variables publicas del formularios // variables publicas del formularios
    protected $rules =[
        'semestre.nombre' => 'required',

    ];

    public function mount(Semestre $semestre)
    {
        $this->semestre = $semestre;
    }
    public function save()
    {
        $this->validate();

        $this->semestre->save();
        $this->reset(['open_editar',  'nombre']);

        $this->emit('render');
        $this->emit('editar'); //mensaje
    }
    public function render()
    {
        return view('livewire.semestres.editar-semestre');
    }
}
