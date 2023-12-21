<?php

namespace App\Http\Livewire\Alumno;

use App\Models\Alumno;
use App\Models\Curso;
use Livewire\Component;

class Crear extends Component
{

    public $open_crear =false;
    public $rut,$nombres,$apellido_paterno,$apellido_materno,$fecha_nacimiento,$edad,$cursos_id;

    protected $rules = [
        'rut' => 'required',
        'nombres'=>'required',
        'apellido_paterno'=>'required',
        'apellido_materno'=>'required',
        'fecha_nacimiento'=>'required',
        'edad'=>'required',
        'cursos_id'=>'required',

    ];
    public function save()
    {
        $this-> validate();
        Alumno::create([

            'rut' => $this->rut ,
            'nombres' => $this->nombres,
            'apellido_paterno'=>$this->apellido_paterno,
            'apellido_materno'=>$this->apellido_materno,
            'fecha_nacimiento'=>$this->fecha_nacimiento,
            'edad'=>$this->edad,
            'cursos_id'=>$this->cursos_id,
        ]);
        $this->reset(['open_crear', 'rut','nombres','apellido_materno','apellido_materno','fecha_nacimiento','edad','cursos_id']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
    }











    public function render()
    {
        $cursos = Curso::all();
        return view('livewire.alumno.crear',compact('cursos'));
    }
}
