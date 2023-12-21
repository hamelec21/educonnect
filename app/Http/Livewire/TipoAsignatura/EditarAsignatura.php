<?php

namespace App\Http\Livewire\TipoAsignatura;

use Livewire\Component;

class EditarAsignatura extends Component
{
    <?php

namespace App\Http\Livewire\Semestres;

use App\Models\Semestre;
use App\Models\TipoAsignatuta;
use Livewire\Component;

class EditarSemestre extends Component
{
    public $open_editar =false;
    public $tipoasignatura;
    public $nombre;  // variables publicas del formularios // variables publicas del formularios
    protected $rules =[
        'tipoasignatura.nombre' => 'required',

    ];

    public function mount(TipoAsignatuta $semestre)
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

    public function render()
    {
        return view('livewire.tipo-asignatura.editar-asignatura');
    }
}
