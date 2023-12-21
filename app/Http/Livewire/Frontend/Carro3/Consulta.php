<?php

namespace App\Http\Livewire\Frontend\Carro3;

use Livewire\Component;

class Consulta extends Component
{
    public $rut;
public function buscar()
{
       //enviar los datos a otra vista
       return redirect()->route('carro3.crear-prestamo', ['rut' => $this->rut]);
}
    public function render()
    {
        return view('livewire.frontend.carro3.consulta');
    }
}
