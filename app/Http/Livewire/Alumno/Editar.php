<?php

namespace App\Http\Livewire\Alumno;

use App\Models\Alumno;
use App\Models\Curso;
use Livewire\Component;

class Editar extends Component
{
    public $open_editar =false;
    public $rut,$nombres,$apellido_paterno,$apellido_materno,$fecha_nacimiento,$edad,$cursos_id;
    public $ficha;

    protected $rules = [
        'ficha.rut' => 'required',
        'ficha.nombres'=>'required',
        'ficha.apellido_paterno'=>'required',
        'ficha.apellido_materno'=>'required',
        'ficha.fecha_nacimiento'=>'required',
        'ficha.edad'=>'required',
        'ficha.cursos_id'=>'required',

    ];

    public function mount(Alumno $ficha)
    {
        $this->ficha = $ficha;
    }
    public function save()
    {
        $this->validate();

        $this->ficha->save();
        $this->reset(['open_editar', 'rut','nombres','apellido_materno','apellido_materno','fecha_nacimiento','edad','cursos_id']);

        $this->emit('render');
        $this->emit('editar'); //mensaje
    }
    public function render()
    {
        $cursos = Curso::all();
        return view('livewire.alumno.editar',compact('cursos'));
    }
}
