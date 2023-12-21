<?php

namespace App\Http\Livewire\Frontend\Carro4;

use Livewire\Component;

class ConsultaDevolucion extends Component
{
    public $rut;

    public function buscar()
    {
        //enviar los datos a otra vista
        return redirect()->route('carro4.crear-devolucion', ['rut' => $this->rut]);
    }
    public function render()
    {
        return view('livewire.frontend.carro4.consulta-devolucion');
    }
}
