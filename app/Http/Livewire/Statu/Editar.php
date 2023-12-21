<?php

namespace App\Http\Livewire\Statu;

use App\Models\Estado;
use Livewire\Component;

class Editar extends Component
{
    public $open_editar =false;
    public $estado;
    public $nombre;  // variables publicas del formularios // variables publicas del formularios
    protected $rules =[
        'estado.nombre' => 'required',

    ];

    public function mount(Estado $estado)
    {
        $this->estado = $estado;
    }
    public function save()
    {
        $this->validate();

        $this->estado->save();
        $this->reset(['open_editar',  'nombre']);

        $this->emit('render');
        $this->emit('editar'); //mensaje
    }

    public function render()
    {
        return view('livewire.statu.editar');
    }
}
